<!doctype html>
@include('layouts.app')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif;

        --btnbg: #f1f081;
        --btnfontcolor: rgb(19, 17, 17);
        --btnfontcolorhover: rgb(255, 255, 255);
        --btnbghover: #2cc21e;
        --btnactivefs: rgb(241, 195, 46);


        --label-index: #960796;
        --danger-index: #5bc257;
    /* PAGINATE */
        --link-color: #000;
        --link-color-hover: #fff;
        --bg-content-color: #ffcc00;

    }

    .container-fluid {
        max-width: 1400px;

    }

    .card {
        background: #fff;
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 5;
        border-radius: 1rem;
        display: flex;
   
    }




    .card h5 {
        overflow: hidden;
        height: 55px;
        font-weight: 300;
        font-size: 1rem;
    }

    .card h5 a {
    color: black;
    text-decoration: none;
    } 

    .card-img-left {
        width: 100%;
        min-height: 250px;
        max-height: 250px;
        object-fit: contain;
        padding: 30px;
    }

    .card h2 {
        font-size: 1rem;
    }


    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    /* Centered text */
    .label-top {
        position: absolute;
        background-color: var(--label-index);
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase;
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;

        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #8bc34a;
        line-height: 90px;
        text-align: center;
        color: white;
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle;
        /* line-height: normal; */
        /* padding: 0 25px; */
    }

    .aff-link {
        /* text-decoration: overline; */
        font-weight: 500;
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px;
    }
    .bold-btn {

        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px;
    }
    .box .btn {
        font-size: 1.5rem;
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px;
        }
    }
    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px;
        }
    }

    /* START BUTTON */
    .btn-warning {
        background: var(--btnbg);
        color: var(--btnfontcolor);
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
        border-radius: 100px;
    }
    .btn-warning:hover {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }
    .btn-check:focus + .btn-warning, .btn-warning:focus {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }
    .btn-warning:active:focus {
        box-shadow: 0 0 0 0.25rem var(--btnactivefs);
    }
    .btn-warning:active {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    /* END BUTTON */

    .bg-success {
        font-size: 1rem;
        background-color: var(--btnbg)!important;
        color: var(--btnfontcolor)!important;
    }
    .bg-danger {
        font-size: 1rem;
    }


    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray;
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray;
    }

    .fa-question-circle:before {
        /* content: "\f059"; */
        color: darkgray;
    }

    .fa-heart:before {
        color:crimson;
    }
    .fa-chevron-circle-right:before {
        color: darkgray;
    }
    </style>

</head>
<body>
    
    @foreach ($products as $item)

    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
          <div class="col hp">
            <div class="card h-100 shadow-sm">
              <a href="checkout/{{$item->id}}">
                <img src="{{$item->img}}" class="card-img-left"  alt="product.title" />
              </a>
      
              <div class="label-top shadow-sm">
                <a class="text-white" href="#">{{$item->brand}}</a>
              </div>
              <div class="card-body">
                <div class="clearfix mb-3">
                  <span class="float-start badge rounded-pill bg-success">SAR {{$item->price}}</span>
      
                </div>
                <h5 class="card-title">
                  <a target="_blank" href="#">{{$item->name}}</a>
                </h5>
      
                <div class="d-grid gap-2 my-4">
                    <span class="text-black"><a>{{$item->display}}</a></span>
      
                  <a href="checkout/{{$item->id}}" class="btn btn-warning bold-btn">add to cart</a>
      
                </div>
                <div class="clearfix mb-1">
      
      
                  </span>
                </div>
              </div>
            </div>
          </div>
          @endforeach

</body>
</html>