@extends("../../layouts.template_admin")

@section("navbar")

@section("mybody")

  @parent

  	<div class="container text-center pb-4">
  		<div class="page-header bg-secondary">
  			<h1> MY LARAVEL STORE - DASHBOARD</h1>

  		<h2>Bienvenido(a) {{ Auth::user()->user }}</h2>

  		</div>
  		

  		<div class="row">

  			<div class="col-md-6">
  				<div class="panel">
  					<i class="fa fa-filter fa-4x  pt-4 pb-4"></i>
  					<a href="{{ route('category.index') }}" class="btn btn-primary btn-block">
  						CATEGORIES
  					</a>
  				</div>
  			</div>

  			<div class="col-md-6">
  				<div class="panel">
  					<i class="fa fa-shopping-cart fa-4x pt-4 pb-4"></i>
  					<a href="{{ route('product.index') }}" class="btn btn-primary btn-block">
  						PRODUCTS
  					</a>
  				</div>
  			</div>
  			
  		</div>

		<!---------------------------------->

  		<div class="row">

  			<div class="col-md-6">
  				<div class="panel">
  					<i class="fa fa-list-alt fa-4x pt-4 pb-4"></i>
  					<a href="{{ route('category.index') }}" class="btn btn-primary btn-block">
  						ORDERS
  					</a>
  				</div>
  			</div>

  			<div class="col-md-6">
  				<div class="panel">
  					<i class="fa fa-users fa-4x pt-4 pb-4"></i>
  					<a href="{{ route('category.index') }}" class="btn btn-primary btn-block">
  						USERS
  					</a>
  				</div>
  			</div>
  			
  		</div>

  		
  	</div>


@endsection

@section("footer")