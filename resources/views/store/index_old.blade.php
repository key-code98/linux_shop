@extends("../layouts.template")

@section("navbar")

@section("mybody")

    @parent


<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-dark pt-2 pl-0 min-vh-100" id="sidebar">
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                <li class="nav-item">
                    <a class="nav-link text-truncate text-white" href="{{ route('index') }}">
                        <i class="fa fa-home"></i><span class="d-none d-sm-inline ml-2 mr-2">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate text-white" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Reports</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav" style="z-index: 200">
                            <li class="nav-item bg-dark"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                            <li class="nav-item bg-dark">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-compass"></i> Areas </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>
            </ul>
        </div>
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

@endsection


@section("footer")
