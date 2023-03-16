<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payer;
use PayPal\Api\ExecutePayment;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

use App\Order;
use App\OrderItem;


class PaymentController extends Controller
{    
	private $apiContext;

	public function __construct()
	{
		$paypalConfig = Config::get('paypal');


		$this->apiContext = new ApiContext(

			new OAuthTokenCredential(

				$paypalConfig['client_id'],
				$paypalConfig['secret']

			)

		);

	}




	public function paymentPaypal()
	{

		// After Step 2
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');


		//Carrito de compras
		
		$items = array();
		$subtotal = 0;
		$cart = \Session::get('cart');
		$currency = 'USD';

		foreach ($cart as $product) {
			
			$item = new Item();
			$item->setName($product->name)
			->setCurrency($currency)
			->setDescription($product->extract)
			->setQuantity($product->quantity)
			->setPrice($product->price);

			$items[] = $item;
			$subtotal +=$product->quantity * $product->price;
		}

		$itemList = new ItemList();
		$itemList->setItems($items);

		$details = new Details();
		$details->setSubtotal($subtotal)->setShipping(100);

		$total = $subtotal + 100;


		$amount = new Amount();
		$amount->setCurrency($currency)
		->setTotal($total)
		->setDetails($details);

		$transaction = new Transaction();
		$transaction->setAmount($amount)
		->setItemList($itemList)
		->setDescription('Descripcion pruebas laravel');


		$callback = url('/paypal/status');
		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl($callback)
		    ->setCancelUrl($callback);

		$payment = new Payment();
		$payment->setIntent('sale')
		    ->setPayer($payer)
		    ->setTransactions(array($transaction))
		    ->setRedirectUrls($redirectUrls);

		try {
		    $payment->create($this->apiContext);

		    return redirect()->away($payment->getApprovalLink());

		}catch (PayPalConnectionException $ex) {
		    echo $ex->getData();
		}

	}


	public function paymentStatus(Request $request)
	{
		$paymentId = $request->input('paymentId');
		$payerId = $request->input('PayerID');
		$token = $request->input('token');


		if (!$paymentId || !$payerId || !$token) {
			$status = 'No ha sido posible realizar el pago';
			return redirect()->route('index');
		}


		$payment = Payment::get($paymentId, $this->apiContext);

		$execution = new PaymentExecution;
		$execution->setPayerId($payerId);


		/* Execute the payment */
		$result = $payment->execute($execution, $this->apiContext);
		//dd($result);
		
		if ($result->getState() == 'approved') {

            $transaction = array(
                'transaction_id' => $payment->transactions[0]->related_resources[0]->sale->id,
                'state' => $payment->transactions[0]->related_resources[0]->sale->state,
                'payment_mode' => $payment->transactions[0]->related_resources[0]->sale->payment_mode,
                'soft_descriptor' => $payment->transactions[0]->soft_descriptor,
                'description' => $payment->transactions[0]->description,
                'currency' => $payment->transactions[0]->related_resources[0]->sale->amount->currency,
                'total' => $payment->transactions[0]->related_resources[0]->sale->amount->total,
                'subtotal' => $payment->transactions[0]->related_resources[0]->sale->amount->details->subtotal,
                'discount' => $payment->transactions[0]->related_resources[0]->sale->amount->details->discount,
                'shipping_price' => $payment->transactions[0]->related_resources[0]->sale->amount->details->shipping,
                'shipping_discount' => $payment->transactions[0]->related_resources[0]->sale->amount->details->shipping_discount
                
            );

			$this->saveOrder($transaction);

			$request->session()->forget('cart');


        	return redirect()->route('index')->with('message', 'Successful purchase! :D');

		} else {

       		 return redirect()->route('index')->with('message', 'Unexpected error, your purchase was canceled! :(' );

		}
		
	}


	protected function saveOrder($transaction)
	{
		$iva = 0;
		$cart = \Session::get('cart');

		foreach ($cart as $product) {
			$iva += $product->quantity * $product->price * 0.16;
		}

		$order = Order::create([

			'transaction_id' => $transaction['transaction_id'],
			'state' => $transaction['state'],
			'payment_mode' => $transaction['payment_mode'],
			'soft_descriptor' => $transaction['soft_descriptor'],
			'description' => $transaction['description'],
			'currency' => $transaction['currency'],
			'total' => $transaction['total'],
			'subtotal' => $transaction['subtotal'],
			'iva' => $iva,
			'discount' => $transaction['discount'],
			'shipping_price' => $transaction['shipping_price'],
			'shipping_discount' => $transaction['shipping_discount'],
			'user_id' => \Auth::user()->id

		]);

		foreach ($cart as $product) {
			$this->saveOrderItem($product, $order->id);
		}
	}


	protected function saveOrderItem($product, $order_id)
	{
	    $iva=0;
		$iva += $product->price * $product->quantity * 0.16;
	    
		OrderItem::create([

			'price' => $product->price,
			'quantity' => $product->quantity,
			'iva' => $iva,
			'product_id' => $product->id,
			'order_id' => $order_id

		]);
	}

}