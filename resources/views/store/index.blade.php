@extends("../layouts.template")

@section("navbar")

@section("mybody")

    @parent


    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carrusel.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel4.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carrusel5.jpg" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid mybg-blue p-4">
        <div class="container bg-light rounded text-center p-4 myshadow">
            <img src="{{ asset('img/logo_dev.jpeg') }}" class="d-inline" style="width: 8%">
            <div class="card-text p-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </div>
            <div class="card-deck">
                <div class="card rounded border-none">
                    <h5 class="card-title p-1 text-white mybg-salmon mytitle-wave-right"><i class="fa fa-shopping-bag fa-2x"></i></h5>
                  <div class="card-body">
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
                <div class="card rounded border-none">
                    <h5 class="card-title p-1 text-white mybg-salmon mytitle-wave-bottom"><i class="fa fa-credit-card-alt fa-2x"></i> <i class="fa fa-plus ml-2 mr-2"></i> <i class="fa fa-cc-paypal fa-2x"></i> </h5>
                  <div class="card-body">
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
                <div class="card rounded border-none">
                    <h5 class="card-title p-1 text-white mybg-salmon mytitle-wave-left"><i class="fa fa-truck fa-2x"></i></h5>
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div id="offersModal" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/offer.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/offer2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/offer3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/offer4.jpg" alt="Third slide">
                        </div>
                        <a class="carousel-control-prev" href="#offersModal" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#offersModal" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-none">
                    <h5 class="card-title pt-4 pb-4 mybg-salmon text-white mytitle-wave-right">
                        Regístrate<br>
                        <small class="pr-2 pl-2">Y obtén 10% de descuento en tu primera compra!</small>
                    </h5>
                    <div class="card-body">
                        <form class="form-row">
                            <div class="col-12">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="name">Apellido</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="name">Contraseña</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="name">Confirmar contraseña</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="name">E-mail</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-outline-info">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mybg-blue" style="height: 12%"></div>

    <div class="container-fluid">
  
        <div class="row">
          <div  class="col-md-12 p-3">
            <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Lo más vendido
                </button>
                <div class="dropdown-menu" aria-labelledby="dropProducts">
                  <a class="dropdown-item" href="#">Todos los productos</a>
                </div>
              </div>
          </div>
          
        </div>
    
          <div id="sales" class="carousel slide d-none d-md-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                </div>
                @foreach($products as $product)
                <div class="carousel-item">
                    <div class="container-fluid text-center bg-dark">
        
                        <div class="card d-inline-block bg-transparent" style="border: none">
                        <img class="card-img-top" src="{{ asset($product->image) }}" alt="Card image" style="width:50%">
                        <div class="card-body bg-light myshadow">
                            <h4 class="card-title  mysecond-back  p-2">{{ $product->name }}</h4>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                        </div>
        
                    </div>
                </div>
            @endforeach

            <a class="carousel-control-prev" href="#sales" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sales" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div id="sales" class="carousel slide d-md-none" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                </div>
                @foreach($products as $product)
                <div class="carousel-item">
                    <div class="container-fluid text-center bg-light">
        
                        <div class="card d-inline-block bg-transparent" style="border: none">
                        <img class="card-img-top" src="{{ asset($product->image) }}" alt="Card image" style="width:50%">
                        <div class="card-body bg-light myshadow">
                            <h4 class="card-title  mysecond-back  p-2">{{ $product->name }}</h4>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                        </div>
        
                    </div>
                </div>
            @endforeach

            <a class="carousel-control-prev" href="#sales" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sales" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    
    </div>    
    
    <div class="container-fluid mybg-blue" style="height: 12%"></div>
<!--
<div class="container-fluid">
    <div class="row">
        <div class="col pt-2">

        <div class="card-columns text-center">

            @foreach($products as $product)

                <div class="card  border-success  mt-4 border-price">
                <div class="card-body">
                    <a href="/products/detail/{{$product->id}}">
                        <h4 class="card-title text-center">{{$product->name}}</h4>
                    </a>
                    <p class="card-text">{{$product->description}}</p>

                    <a href="{{ route('payment') }}">
                        <button type="button" class="btn btn-info btn-md btn-center"> <i class="fa fa-paypal fa-2x"></i> </button>
                    </a>

                    <a href="{{ route('cart_add', $product->slug) }}">
                        <button type="button" class="btn btn-warning btn-md btn-center"> <i class="fa fa-shopping-cart fa-2x"></i> </button>
                    </a>

                </div>
                    <img class="card-img-bottom border-price  w-100" src="{{ asset($product->image) }}" alt="Card image cap">
                </div>
            @endforeach

        </div>

        </div>
    </div>
</div>
-->

@endsection


@section("footer")
