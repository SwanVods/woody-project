<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
</head>

<body>
  <div id="app">
    <div class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-lg-3">
            <div class="logo"><img src="images/logo.png"></div>
          </div>
          <div class="col-sm-4 col-lg-5">
            <div class="menu-area">
              <nav class="navbar navbar-expand-lg ">
                <!-- <a class="navbar-brand" href="#">Menu</a> -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                    <li class="#" href="#">
                      <a class="nav-link" href="furnitures.html">Furnitures</a>
                    </li>
                    <li class="nav-item" href="#">
                      <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <div class="col-sm-8 col-lg-4">
            <div class="togle_3">
              <div class="left_main">
                <div class="menu_main">
                  @guest
                  @if (Route::has('login'))
                  <a href="{{__('login')}}"><i class="fa fa-fw fa-user"></i>Login</a>
                  @endif
                  @if (Route::has('register'))
                  /
                  <a href="{{__('register')}}">Register</a>
                  @endif
                  @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                        {{ __('logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
                  @endguest
                </div>
              </div>
              <div class="middle_main">
                <div class="shoping_bag"><img src="images/search-icon.png"></div>
              </div>
              <div class="right_main">
                <div class="togle_main"><img src="images/shopping-bag.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @yield('index-content')
    </div>
    
    <main class="py-4">
      @yield('content')
    </main>

     <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">


          <div class="col-md-12">
            <div class="useful_main border_right0">
              <h2 class="useful_text">Menus</h2>
              <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="{{route('about')}}">About </a></li>
                <li><a href="company.html">Company</a></li>
                <li><a href="{{route('product')}}">Furnitures</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>





            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 ">
            <h2 class="useful_text">Address</h2>
            <ul class="location">
              <li><img src={{asset("images/map-icon.png")}}>Locations</li>

              <li><img src={{asset("images/call-icon.png")}}><a href="company.html">+71 89078493</a></li>
              <li><img src={{asset("images/email-icon.png")}}><a href="{{route('product')}}">demo@gmail.com</a></li>

            </ul>


          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 ">
            <h2 class="useful_text">Newsletter</h2>
            <div class="form-group">
              <input type="text" class="address_send" placeholder="Address" name="Email">
              <button class="subscribe_bt">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright">
      <div class="container">
        <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free html Templates
        </p>
      </div>
    </div>
    <!-- copyright section end -->
    </div>
  </div>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      })});
  </script>
</body>

</html>