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

  		<small>[Edit a category]</small>

  	</div>

  	<div class="page">
		<form method="POST" enctype="multipart/form-data" action="{{ route('product.update', $product->slug) }}">
      @method('PUT')
			@csrf

        <div class="card" style="border: none">
          <div class="card-body">

                    @include('admin.category.errors')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name Product</label>

                            <div class="col-md-6">
                                <input id="name" name="name" type="text" value="{{ $product->name }}" class="form-control @error('name') is-invalid @enderror">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select id="category" name="category"  class="form-control @error('category') is-invalid @enderror">
                                  <option selected="selected" value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                  @foreach($categories as $id => $name)

                                    <option value="{{ $id }}">{{ $name }}</option>

                                  @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="extract" class="col-md-4 col-form-label text-md-right">Extract</label>

                            <div class="col-md-6">
                                <input id="extract" name="extract" type="text" value="{{ $product->extract }}" class="form-control @error('extract') is-invalid @enderror">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price" name="price" type="text" value="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror">
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" name="quantity" type="number" value="{{ $product->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                            </div>
                        </div>

                        @if($product->image)

                           <div class="form-group row">
                            <div class="col-md-4"></div>

                              <div class="col-md-4">
                                  <img src="{{asset($product->image)}}" class="card-img-top d-inline-block">
                              </div>

                              <div class="col-md-4"></div>
                            </div>

                        @endif

                       <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-4">
                                <input id="img" name="img" type="file" class="form-control">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                            </div>
                        </div>

                        @if($product->image2)

                         <div class="form-group row">
                          <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <img src="{{asset($product->image2)}}" class="card-img-top d-inline-block">
                            </div>

                            <div class="col-md-4"></div>
                          </div>

                        @endif


                       <div class="form-group row">
                            <label for="img2" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-4">
                                <input id="img2" name="img2" type="file" class="form-control">
                                <input type="hidden" name="image" value="{{ $product->image2 }}">
                            </div>
                        </div>

                        @if($product->image3)

                         <div class="form-group row">
                          <div class="col-md-4"></div>

                            <div class="col-md-4">
                                <img src="{{asset($product->image3)}}" class="card-img-top d-inline-block">
                            </div>

                            <div class="col-md-4"></div>
                          </div>

                        @endif


                       <div class="form-group row">
                            <label for="img3" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-5">
                                <input id="img3" name="img3" type="file" class="form-control">
                                <input type="hidden" name="image" value="{{ $product->image3 }}">
                            </div>
                        </div>

                      @if($product->image4)

                       <div class="form-group row">
                        <div class="col-md-4"></div>

                          <div class="col-md-4">
                              <img src="{{asset($product->image4)}}" class="card-img-top d-inline-block">
                          </div>

                          <div class="col-md-4"></div>
                        </div>

                      @endif

                       <div class="form-group row">
                            <label for="img4" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-4">
                                <input id="img4" name="img4" type="file" class="form-control">
                                <input type="hidden" name="image" value="{{ $product->image4 }}">
                            </div>
                        </div>


                      @if($product->image5)

                       <div class="form-group row">
                        <div class="col-md-4"></div>

                          <div class="col-md-4">
                              <img src="{{asset($product->image5)}}" class="card-img-top d-inline-block">
                          </div>

                          <div class="col-md-4"></div>
                        </div>

                        @endif

                       <div class="form-group row">
                            <label for="img5" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-4">
                                <input id="img5" name="img5" type="file" class="form-control">
                                <input type="hidden" name="image" value="{{ $product->image5 }}">
                            </div>
                        </div>


                      <div class="form-group row">
                            <label for="visible" class="col-md-4 col-form-label text-md-right">Visible</label>

                            <div class="col-md-6">
                              @if($product->visible == 1)
                                  <input type="checkbox" name="visible" checked="checked" class="form-control">
                                @else
                                  <input type="checkbox" name="visible" class="form-control">
                              @endif
                              </div>
                        </div>
  
          </div>
        </div>

          <a href="{{ route('product.index') }}"><button type="button" class="btn btn-info">Return</button></a>

                    <button type="submit" class="btn btn-success">Send</button>

			
		</form> 
  	</div>



  </div>



@endsection

@section("footer")
