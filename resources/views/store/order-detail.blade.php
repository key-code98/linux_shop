@extends("../layouts.template")

@section("navbar")

@section("mybody")

  @parent


  	<div class="container text-center">
  		<div class="page-header">
  			<h1 class="display-4"> Detalles del pedido </h1>
  		</div>


  		<div class="page">
  			<div class="table-responsive">
  				<h3>Datos del usuario</h3>

  				<table class="table  table-striped  table-hover  table-bordered">
  					<tr><td>Nombre: </td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
  					<tr><td>Usuario: </td><td>{{ Auth::user()->user }}</td></tr>
  					<tr><td>Correo: </td><td>{{ Auth::user()->email }}</td></tr>
  					<tr><td>Dirección: </td><td>{{ Auth::user()->address }}</td></tr>
  					
  				</table>
  				
  			</div>

  			<div class="table-responsive">
  				<h3>Datos del pedido</h3>

  				<table class="table  table-striped  table-hover  table-bordered">

  					<tr>
  						<th>Producto</td>
  						<td>Precio</td>
  						<td>Cantidad</td>
  						<td>Subtotal</td>
  						
  					</tr>

  					@foreach($cart as $item)
  						<tr>
  							<td>{{ $item->name }}</td>
  							<td>{{ number_format($item->price, 2) }}</td>
  							<td>{{ $item->quantity }}</td>
  							<td>{{ number_format($item->price * $item->quantity,2) }}</td>	
  							
  						</tr>
  					@endforeach
  				</table><hr>

  				<h3>
  					<span class="label label-success">
  						Total: ${{ number_format($total, 2) }}
  					</span>
  				</h3><hr>

  				<p>
  					<a href="{{ route('cart_show') }}" class="btn btn-primary">warning</a>

  					<a href="{{ route('payment') }}"  class="btn btn-info">
              <i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
            </a>
  				</p> 	


  			</div>
  			
  		</div>

  		
  	</div>


@endsection


@section("footer")
