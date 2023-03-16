@extends("../layouts.template")

@section("navbar")

@section("mybody")

  @parent

  <div class="container-fluid">


        <div class="row"  style="height: 80%">
            <div class="col-md-9">


                    <div class="table-responsive">

                        @if(count($cart))

                        <a href="{{ route('cart_trash') }}">
                            <button class="btn btn-danger mt-4">Vaciar Carrito</button>
                        </a>

                      <h4 class="card-title text-center">Carrito de compras</h4>

                        <table class="table table-striped table-hover  table-bordered">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                    <th>Quitar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->image) }}" style="width: 50px"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <input type="number" name="" id="product_{{ $item->id }}" value="{{ $item->quantity }}" min="1" max="100">
                                            <a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart_update', $item->slug, '') }}" data-id="{{ $item->id }}">R</a>
                                        </td>
                                        <td>{{ $item->stock }}</td>
                                        <td>{{ number_format($item->price,2) }}</td>
                                        <td>{{ number_format($item->price * $item->quantity,2) }}</td>
                                        <td><a class="btn btn-danger" href="{{ route('cart_delete', $item->slug) }}">X</a></td>
                                        
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>

                        <hr>

                        <h3>
                            
                            <span class="label label-success">

                                Total: ${{ number_format($total,2) }}
                                
                            </span>

                        </h3>

                        @else

                            <h1 class="display-4">Carrito Vacío :(</h1>

                        @endif

                        <a href="{{ route('index') }}" class="text-center">

                            <button class="btn btn-info d-inline">Seguir comprando</button>

                        </a>


                        <a href="{{ route('order_detail') }}" class="text-center">

                            <button class="btn btn-success d-inline">Continuar</button>

                        </a>

                    </div>
  
            </div>
            <div class="col-md-5">
                
            </div>
            
        </div>

  </div>

@endsection


@section("footer")
