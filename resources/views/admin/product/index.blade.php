@extends("../../layouts.template_admin")

@section("navbar")

@section("mybody")

  @parent


  <div class="container text-center">
  	<div class="page-header">
  		<h1>
  			<i class="fa fa-shopping-cart"></i>
  			PRODUCTS 
  		</h1> 
  			<a href="{{ route('product.create') }}" class="btn btn-warning">
  				<i class="fa fa-plus-square-o"></i>
  			</a>
  	</div>

  	<div class="page">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-hover  text-center">
  				<thead>
  					<tr>
  						<th>Edit</th>
  						<th>Delete</th>
              <th>Image</th>
  						<th>Name</th>
              <th>Category</th>
  						<th>Extract</th>
              <th>Cantidad</th>
  						<th>Price</th>
              <th>Visible</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($products as $product)
  						<tr>
  							<td>
  								<a href="{{ route('product.edit', $product->slug) }} " class="btn btn-primary">
  									<i class="fa fa-pencil-square-o"></i>
  								</a>
  							</td>
  							<td>

						<form method="POST" action="{{ route('product.destroy', $product->slug) }}">
				      		@method('DELETE')
								@csrf
								<button onclick=" return confirm('Are you sure to delete this product?')" class="btn btn-danger">
  									<i class="fa fa-trash"></i>
								</button>
						</form>

  							</td>
                <td>
                  <img src="{{ asset($product->image) }}" style="width: 50px">
                </td>
  							<td>
  								{{ $product->name }}
  							</td>
  							<td>
  								{{ $product->category->name }}
  							</td>
  							<td>
  								{{ $product->extract }}
  							</td>
                <td>
                  {{ $product->quantity }}
                </td>
                <td>
                  {{ number_format($product->price, 2) }}
                </td>
                <td>
                  {{ ($product->visible == 1) ? 'Si' : 'No' }}
                </td>

  						</tr>
  					@endforeach
  				</tbody>
  				
  			</table>
  		</div>

      <hr>

      <?=$products->render()?>
  		
  	</div>



  </div>



@endsection

@section("footer")
