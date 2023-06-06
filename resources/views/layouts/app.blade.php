<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <header class="p-3 bg-dark text-white">


      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              
             <img src="/img/gamely-logo.png"  class="bi me-2"  height="50" role="img" aria-label="Bootstrap">
             
            </svg>
            
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
            {{-- <li><a href="/parts" class="nav-link px-2 text-white">Parts</a></li> --}}
            <li><a href="/store" class="nav-link px-2 text-white">Laptops</a></li>
            <li><a href="/Computers" class="nav-link px-2 text-white">Computers</a></li>
            <li><a href="/phone" class="nav-link px-2 text-white">Phones</a></li>
            <li><a href="/" class="nav-link px-2 text-white">About</a></li>
          </ul>
  
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Gaming laptop..." aria-label="Search">
          </form>

          
       <ul class="list-group list-group-horizontal">
        <li class="dropdown"><a href="#"><span><i class="bi bi-person icon"></i></span></a>
          
          <ul>
            @guest
            <div class="text-end">
            
            @if (Route::has('login'))   
            <li><a href="{{ route('login') }}" >{{ __('Login') }}</a></li>  
            @endif 
            
            @if (Route::has('register')) 
            <li><a href="{{ route('register') }}" >{{ __('Register') }}</a></li>
            @endif 
            
            @else
            <li><a href="{{ route('profile') }}">My Profile</a></li>
            <li><a href="{{ route('logout') }}" class="btn btn-warning"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            @endguest
            
            
          </ul>
        </li>
        
            
          
          </div>
        </div>
      </div>
    </header>
      <!--Main Navigation-->
      

  
</head>
<body>

   
 <main class="py-4">
  @yield('content')
</main>

    <footer>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  
  <div class="social-media-links">

    <a href="https://github.com/lFahadZz" target="_blank">
      <i class="fa fa-github w3-hover-opacity" ></i>
    </a>
    <a href="https://www.linkedin.com/in/fahad-alahmadi-705a41241/" target="_blank">
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </a>
  </div>
  
</footer>

      </footer>
</body>
</html>
