<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/personal.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>

<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top d-flex justify-content-between">

@yield('navbar')

    <div class="bg-light rounded-circle" >
      <a href="#inicio">
        <img src="{{asset('img/logo_dev.jpeg')}}" style="width: 65px" class="d-inline-block">
      </a>
    </div>

  <div>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav text-center">
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('index') }}">Inicio</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" id="dropdown_products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="nosotros.html">Nosotros</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-dark" href="contacto.html">Contacto</a>
      </li>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link  text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item  dropdown">
                                <a id="navbarDropdown" class="nav-link text-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

    </ul>
    </div>
  </div> 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon navbar-dark"></span>
  </button>
  
</nav>


  <div class="container-fluid mybg-blue mynav-menu" style="display:none" id="menu_products">
    <div class="row p-3">
      <div class="col-md-4">
        <div class="card bg-transparent" style="border: none">
          <h5 class="card-title mybg-blue text-white">
            <i class="fa fa-filter pl-2 pr-2"></i>
            Categorías
          </h5>
          <ul style="list-style: none;text-decoration: none;">
            <li>
              <i class="fa fa-desktop pl-2 pr-2 text-white"></i>
              <a class="text-white" href="{{ route('show_products') }}">Pantallas</a>
            </li>
            <li>
              <i class="fa fa-laptop pl-2 pr-2 text-white"></i>
              <a class="text-white" href="{{ route('show_products') }}">PC/Laptop</a>
            </li>
            <li>
              <i class="fa fa-gamepad pl-2 pr-2 text-white"></i>
              <a class="text-white" href="{{ route('show_products') }}">Consolas</a>
            </li>
            <li>
              <i class="fa fa-headphones pl-2 pr-2 text-white"></i>
              <a class="text-white" href="{{ route('show_products') }}">Audífonos</a>
            </li>
            <li>
              <i class="fa fa-mobile pl-2 pr-2 text-white"></i>
              <a class="text-white" href="{{ route('show_products') }}">Smartphones</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-transparent" style="border: none">
          <h5 class="card-title mybg-blue text-white">
            <i class="fa fa-gratipay pl-2 pr-2"></i>
            Beneficios
          </h5>
          <ul style="list-style: none;text-decoration: none;">
            <li>
              <i class="fa fa-percent pl-2 pr-2 text-white"></i>
              <a class="text-white" href="services.html#website">Ofertas</a>
            </li>
            <li>
              <i class="fa fa-users pl-2 pr-2 text-white"></i>
              <a class="text-white" href="services.html#website">¡Regístrate y obten ofertas exclusivas!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-transparent" style="border: none">
          <h5 class="card-title mybg-blue text-white">
            <i class="fa fa-question-circle pl-2 pr-2"></i>
            Sucursales & Soporte
          </h5>
          <ul style="list-style: none;text-decoration: none;">
            <li>
              <i class="fa fa-map-marker pl-2 pr-2 text-white"></i>
              <a class="text-white" href="services.html#website">Sucursales</a>
            </li>
            <li>
              <i class="fa fa-life-ring pl-2 pr-2 text-white"></i>
              <a class="text-white" href="services.html#website">Centro de Cotacto</a>
            </li>
            <li>
              <i class="fa fa-question-circle pl-2 pr-2 text-white"></i>
              <a class="text-white" href="services.html#website">Preguntas frecuentes</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
  $( document ).ready(function() {

    $('#dropdown_products').on('click', function(){
      $('#menu_products').toggle();
    });

  });

  </script>

    @if(\Session::has('message'))
          @include('store.message')
    @endif


@yield('mybody')

</body>
</html>