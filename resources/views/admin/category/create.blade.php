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

  		<small>[Add new category]</small>

  	</div>

  	<div class="page">
		<form method="POST" action="{{ route('category.store') }}">
			@csrf

				<div class="card" style="border: none">
					<div class="card-body">

                    @include('admin.category.errors')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name Category</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">Color</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color">
                            </div>
                        </div>
	
					</div>
				</div>

					<a href="{{ route('category.index') }}"><button type="button" class="btn btn-info">Return</button></a>

                    <button type="submit" class="btn btn-success">Send</button>
			
		</form> 
  	</div>



  </div>



@endsection

@section("footer")
