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
            <li><a href="/Computers" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="/Computers" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="/" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="/" class="nav-link px-2 text-white">About</a></li>
          </ul>
  
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Gaming laptop..." aria-label="Search">
          </form>
  
          <div class="text-end">
            <a type="button" class="btn btn-outline-light me-2" href="/login">Login</a>
            <a type="button" class="btn btn-warning" href="/register">Sign-up</a>
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
