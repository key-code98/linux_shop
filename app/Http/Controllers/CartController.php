<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('cart')) \Session::put('cart', array());
    }


    // Show cart

    public function show()
    {

    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('store.cart', compact('cart', 'total')); 

    }


    //Add item

    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
        $product->quantity =1;
    	$cart[$product->slug] = $product;

    	\Session::put('cart', $cart);

    	return redirect()->route('cart_show');

    }

    //Delete item

    public function delete(Product $product)
    {
    	$cart = \Session::get('cart');
    	unset($cart[$product->slug]);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart_show');

    }

    public function trash()
    {
    	\Session::forget('cart');
    	return redirect()->route('cart_show');

    }

    public function update(Product $product, $quantity)
    {

    	$cart = \Session::get('cart');
    	$cart[$product->slug]->quantity = $quantity;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart_show');

    }

    private function total()
    {

    	$cart = \Session::get('cart');
        $total = 0; 
        
    	foreach ($cart as $item) {
    		$total += $item->price * $item->quantity;
    	}

    	return $total;

    }


    public function order()
    {

        if (count(\Session::get('cart')) <= 0) {
            return redirect()->route('index'); 
        };

        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }


}
