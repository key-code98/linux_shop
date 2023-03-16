@extends("../layouts.template")

@section("navbar")

@section("mybody")

  @parent

  <div class="container-fluid pt-4 pb-4 mt-4 mb-4">
    <div class="row pt-4 pb-4 mt-4 mb-4">
      <div class="col-md-7">
        <div class="card  border-success  mt-4 border-price">
          <div class="card-body">
            <a href="/productos/{{$products->id}}">
              <h4 class="card-title text-center">{{$products->name}}</h4>
            </a>
            <p class="card-text">{{$products->description}}</p>

            <p class="card-text">Stock: {{$products->quantity}}</p>

            <a href="{{ route('payment') }}">
                <button type="button" class="btn btn-info btn-md btn-center"> <i class="fa fa-paypal fa-2x"></i> </button>
            </a>

            <a href="{{ route('cart_add', $products->slug) }}">
                <button type="button" class="btn btn-warning btn-md btn-center"> <i class="fa fa-shopping-cart fa-2x"></i> </button>
            </a>
          </div>
        </div>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Descripción</a>
              <a class="dropdown-item" href="#">Detalles</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Acerca de</a>
            </div>
          </li>
        </ul>

      </div>
      <div class="col-md-5">

        <div class="card">
          <div class="card-header">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active text-center">
                  <img src="{{ asset($products->image) }}" class="d-inline w-75">
                </div>       
                @if($products->image2)
  
                    <div class="carousel-item">                            
                      <img src="{{ asset($products->image2) }}">
                    </div>  
  
                @endif                                          
  
  
                @if($products->image3)
  
                    <div class="carousel-item">                            
                      <img src="{{ asset($products->image3) }}">
                    </div>  
  
                @endif    
  
  
                @if($products->image4)
  
                    <div class="carousel-item">                            
                      <img src="{{ asset($products->image4) }}" style="width: 200px">
                    </div>  
  
                @endif    
  
  
                @if($products->image5)
  
                    <div class="carousel-item">                            
                      <img src="{{ asset($products->image5) }}" style="width: 200px">
                    </div>  
  
                @endif    
  
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <div class="card-footer bg-seconodary text-center">
            <a href="#" class="btn btn-lg btn-info d-inline"><i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>

    </div>
  </div>
</div>

@endsection


@section("footer")
