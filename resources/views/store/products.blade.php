@extends("../layouts.template")

@section("navbar")

@section("mybody")

    @parent

    <div class="container-fluid p-0 myback" style="height: 25%"></div>

    <div class="container-fluid">
        <div class="row pl-1 pr-0">
            <div class="col-2 col-xs-1 bg-light p-0" id="menu" style="display: block">
                <div class="list-group p-0 m-0">
                    <div class="dropdown">
                        <button class="list-group-item list-group-item-action dropdown-toggle" type="button" id="dropProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-inline">Categorías</span>
                            <span class="d-md-none"><i class="fa fa-ticket mb-2"></i></span>
                        </button>
                        <div class="dropdown-menu bg-secondary" aria-labelledby="dropProducts">
                            <a class="btn btn-light" href="#">Todos los productos</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="list-group-item list-group-item-action dropdown-toggle" type="button" id="dropProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-inline">Marcas</span>
                            <span class="d-md-none"><i class="fa fa-ticket mb-2"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropProducts">
                            <a class="dropdown-item" href="#">Todos los productos</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="list-group-item list-group-item-action dropdown-toggle" type="button" id="dropProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-inline">Rango de precio</span>
                            <span class="d-md-none"><i class="fa fa-ticket mb-2"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropProducts">
                            <a class="dropdown-item" href="#">Todos los productos</a>
                        </div>
                    </div>
                        <button class="list-group-item list-group-item-action" type="button">
                            <span class="d-none d-md-inline">Ofertas</span>
                            <span class="badge badge-danger badge-pill">14</span>
                        </button>
                </div>
            </div>
            <div class="col-10 col-xs-10 p-0" id="panel">
                <div class="navbar mybg-salmon p-2 mb-2">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="fa fa-filter pl-2 pr-2"></i>Más Vendido</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropProducts">
                            <a class="dropdown-item" href="#">Todos los productos</a>
                        </div>
                    </div>

                    <button class="btn btn-outline-light" type="button" id="expand">
                        <i class="fa fa-expand"></i>
                    </button>
                </div>
                <div class="card-columns text-center pl-1 pr-1">

                    @foreach($products as $product)
                        <div class="card rounded myshadow bg-light pl-1 pr-1">
                            <div class="card-body p-0 text-center">
                                <a style="text-decoration: none; color:white" href="/products/detail/{{$product->id}}">
                                    <h4 class="card-title  mytitle-wave-bottom mybg-blue pt- pb-2 text-center">{{$product->name}}</h4>
                                </a>
                                <h3 class="font-weight-light">{{$product->price}}</h3>
                                <p class="card-text">{{$product->description}}</p>
                                <img class="w-50 d-inline" src="{{ asset($product->image) }}" alt="product_image">
                            </div>
                            <div class="card-footer mt-2 text-center">
                                <a href="{{ route('cart_add', $product->slug) }}">
                                    <button type="button" class="btn btn-secondary  btn-md btn-center"> <i class="fa fa-shopping-cart fa-2x"></i> </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
        
                </div>
                <hr>
                <div class="container-fluid text-center">
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mybg-blue" style="height: 13%"></div>

    <script>
        $('document').ready(function(){
            $('#expand').on('click', function(){
                $('#menu').toggle();
                $('#panel').toggleClass('col-12');
            });
        });
    </script>

    @endsection

@section("footer")