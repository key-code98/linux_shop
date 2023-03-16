@extends("../../layouts.template_admin")

@section("navbar")

@section("mybody")

  @parent

  <div class="container">
  	<div class="page-header text-center">
  		<h1>
  			<i class="fa fa-book"></i>
  			ORDERS 
  		</h1>

  		<small>[Edit an order]</small>

  	</div>

  	<div class="page">
      <div class="row">
        <div class="col-md-6">

        <div class="card p-2 rounded" style="border: none">
            <h4 class="card-header text-center text-white bg-dark rounded">
                Sell Info
            </h4>

					<div class="card-body">

                        <div class="row">
                            <div class="col-md-6 text-right">
                                ID
                            </div>
                            <div class="col-md-6">
                                {{ $order->id }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Transaction ID
                            </div>
                            <div class="col-md-6">
                                {{ $order->transaction_id }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                State
                            </div>
                            <div class="col-md-6">
                                {{ $order->state }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Payment mode
                            </div>
                            <div class="col-md-6">
                                {{ $order->payment_mode }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Soft descriptor
                            </div>
                            <div class="col-md-6">
                                {{ $order->soft_descriptor }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Description
                            </div>
                            <div class="col-md-6">
                                {{ $order->description }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Currency
                            </div>
                            <div class="col-md-6">
                                {{ $order->currency }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Total
                            </div>
                            <div class="col-md-6">
                                {{ $order->total }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Subtotal
                            </div>
                            <div class="col-md-6">
                                {{ $order->subtotal }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                IVA
                            </div>
                            <div class="col-md-6">
                                {{ $order->iva }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Discount
                            </div>
                            <div class="col-md-6">
                                {{ $order->discount }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                            Shipping price
                            </div>
                            <div class="col-md-6">
                                {{ $order->shipping_price }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-right">
                                Shipping discount
                            </div>
                            <div class="col-md-6">
                                {{ $order->shipping_discount }}
                            </div>
                        </div>
	
					</div>
				</div>

        </div>

        <div class="col-md-6">
            <div class="card p-2 rounded" style="border: none;">
                <h4 class="card-header bg-secondary text-center text-white rounded">
                    Delivery
                </h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('order.update', $order) }}">
                        @method('PUT')
                                @csrf
                        <div class="form-group row">
                            <label for="shipping_key" class="col-md-4 col-form-label text-md-right">Shipping Key</label>

                            <div class="col-md-6">
                                <input type="text" name="shipping_key" value="{{ $order->shipping_key }}" class="form-control @error('shipping_key') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shipping_company" class="col-md-4 col-form-label text-md-right">Shipping Company</label>

                            <div class="col-md-6">
                                <select class="form-control" name="shipping_company">
                                    <option value="{{ $order->shipping_company }}" selected>{{ $order->shipping_company }}</option>
                                    <option value="DHL">DHL</option>
                                    <option value="FedEx">FedEx</option>
                                    <option value="Estafeta">Estafeta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shipping_status" class="col-md-4 col-form-label text-md-right">Shipping State</label>

                            <div class="col-md-6">
                                <select class="form-control" name="shipping_status">
                                @if($order->shipping_status == 1)
                                        <option value="{{ $order->shipping_status }}" selected>In Process</option>
									@elseif($order->shipping_status == 2)
                                        <option value="{{ $order->shipping_status }}" selected>Send</option>
									@else
                                        <option value="{{ $order->shipping_status }}" selected>Delivered</option>
								@endif
                                    <option value="1">In Process</option>
                                    <option value="2">Send</option>
                                    <option value="3">Delivered</option>
                                </select>
                            </div>
                        </div>

                    </div>

            </div>
                <div class="card-footer bg-transparent text-right" style="border: none;">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
      </div>

        <div class="container-fluid text-center p-3">
            <a href="{{ route('order.index') }}" class="d-inline"><button type="button" class="btn btn-info">Return</button></a>
        </div>

  	</div>

  </div>



@endsection

@section("footer")
