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

  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-hover  text-center">
  				<thead>
  					<tr>
					  	<th>Id</th>
  						<th>Transaction id</th>
  						<th>State</th>
						<th>Currency</th>
						<th>Total</th>
						<th>Subtotal</th>
						<th>Shipping</th>
						<th>IVA</th>
						<th>Shipping key</th>
						<th>Shipp State</th>
						<th>Edit</th>
  					</tr>
  				</thead>
  				<tbody>
				  	@foreach($orders as $order)
  						<tr>
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
							  	{{ $order->shipping_price }}
  							</td>
  							<td>
							  	{{ $order->iva }}
  							</td>
  							<td>
							  	{{ $order->shipping_key }}
  							</td>
  							<td>
								@if($order->shipping_status == 1)
								  		<span class="badge badge-danger">In Process</span>
									@elseif($order->shipping_status == 2)
										<span class="badge badge-warning">Send</span>
									@else
										<span class="badge badge-success">Delivered</span>
								@endif
									
  							</td>
							  <td>
								  @if($order->shipping_status == 1 || $order->shipping_status == 2)
  								<a href="{{  route('order.edit', $order)  }}" class="btn btn-primary btn-sm">
  									<i class="fa fa-pencil-square-o"></i>
  								</a>
									@else
  								<a href="{{  route('order.edit', $order)  }}" class="btn btn-secondary btn-sm">
  									<i class="fa fa-info-circle"></i>
  								</a>
								@endif
  							</td>
  						</tr>
					@endforeach
  				</tbody>
  				
  			</table>
  			
  		</div>




  </div>



@endsection

@section("footer")
