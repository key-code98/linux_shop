<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/personal.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top d-flex justify-content-between">

@yield('navbar')

    <div class="bg-transparent" >
      <a href="#inicio" style="text-decoration: none">
        <img src="{{asset('img/logo_dev.jpeg')}}" style="width: 65px" class="d-inline-block">
                <h4 class="d-none d-md-inline  text-light">MyShop Admin</h4>
      </a>
    </div>

  <div>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav text-center">
      <li class="nav-item">
        <a class="nav-link text-light" href="index.html">Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="nosotros.html">Support</a>
      </li> 

                        @guest
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           <!-- 
                           @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link  text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            --> 
                        @else
                            <li class="nav-item  dropdown">
                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

    @if(\Session::has('message'))
          @include('store.message')
    @endif

@yield('mybody')




<!-- Footer -->
<footer class="page-footer font-small bg-secondary pt-4 text-white">

<script src="{{asset('js/myjs.js')}}"></script>

@yield('footer')

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>