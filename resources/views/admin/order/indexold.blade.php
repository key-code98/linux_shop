@extends("../../layouts.template_admin")

@section("navbar")

@section("mybody")

  @parent


  <div class="container text-center">
  	<div class="page-header">
  		<h1>
  			<i class="fa fa-book"></i>
  			ORDERS 
  		</h1>
  	</div>

  	<div class="page">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-hover  text-center">
  				<thead>
  					<tr>
					  	<th>Edit</th>
					  	<th>Id</th>
  						<th>Transaction id</th>
  						<th>State</th>
						<th>Currency</th>
						<th>Total</th>
						<th>Subtotal</th>
						<th>IVA</th>
						<th>API</th>
						<th>Shipping price</th>
						<th>Shipping key</th>
						<th>Shipping state</th>
  					</tr>
  				</thead>
  				<tbody>
				  	@foreach($orders as $order)
  						<tr>
						  <td>
  								<a href="{{  route('order.edit', $order)  }}" class="btn btn-primary">
  									<i class="fa fa-pencil-square-o"></i>
  								</a>
  							</td>
  							<td>
							  	{{ $order->id }}
  							</td>
  							<td>
							  	{{ $order->transaction_id }}
  							</td>
  							<td>
							  	{{ $order->state }}
  							</td>
  							<td>
							  	{{ $order->currency }}
  							</td>
  							<td>
							  	{{ $order->total }}
  							</td>
  							<td>
							  	{{ $order->subtotal }}
  							</td>
  							<td>
							  	{{ $order->iva }}
  							</td>
  							<td>
							  <i class="fa fa-paypal fa-2x"></i> 
  							</td>
  							<td>
							  	{{ $order->shipping_price }}
  							</td>
  							<td>
							  	{{ $order->shipping_key }}
  							</td>
  							<td>
							  	{{ $order->shipping_status }}
  							</td>
  						</tr>
					@endforeach
  				</tbody>
  				
  			</table>
  			
  		</div>
  		
  	</div>



  </div>



@endsection

@section("footer")
