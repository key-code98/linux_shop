@extends("../../layouts.template_admin")

@section("navbar")

@section("mybody")

  @parent


  <div class="container text-center">
  	<div class="page-header">
  		<h1>
  			<i class="fa fa-shopping-cart"></i>
  			CATEGORIES 
  		</h1> 
  			<a href="{{ route('category.create') }}" class="btn btn-warning">
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
  						<th>Name</th>
  						<th>Description</th>
  						<th>Color</th>
  					</tr>
  				</thead>
  				<tbody>
  					@foreach($categories as $category)
  						<tr>
  							<td>
  								<a href="{{ route('category.edit', $category) }} " class="btn btn-primary">
  									<i class="fa fa-pencil-square-o"></i>
  								</a>
  							</td>
  							<td>

						<form method="POST" action="{{ route('category.destroy', $category) }}">
				      		@method('DELETE')
								@csrf
								<button onclick=" return confirm('Are you sure to delete this category?')" class="btn btn-danger">
  									<i class="fa fa-trash"></i>
								</button>
						</form>

  							</td>
  							<td>
  								<a href="#">{{ $category->name }}</a>
  							</td>
  							<td>
  								<a href="#">{{ $category->description }}</a>
  							</td>
  							<td>
  								<a href="#">{{ $category->color }}</a>
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
