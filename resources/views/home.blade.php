@extends('layouts.app')
@section('title', 'laptops')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-color: #eee
}
                                	.mt-100{
                                		margin-top: 100px;
                                	}
                                	.card {
    border-radius: 7px !important;
    border-color: #e1e7ec;
}

.mb-30 {
    margin-bottom: 30px !important;
}

.card-img-tiles {
    display: block;
    border-bottom: 1px solid #e1e7ec;
}

a {
    color: #0da9ef;
    text-decoration: none !important;
}

.card-img-tiles>.inner {
    display: table;
    width: 100%;
}

.card-img-tiles .main-img, .card-img-tiles .thumblist {
    display: table-cell;
    width: 65%;
    padding: 15px;
    vertical-align: middle;
}

.card-img-tiles .main-img>img:last-child, .card-img-tiles .thumblist>img:last-child {
    margin-bottom: 0;
}

.card-img-tiles .main-img>img, .card-img-tiles .thumblist>img {
    display: block;
    width: 100%;
    margin-bottom: 6px;
}
.thumblist {
    width: 35%;
    border-left: 1px solid #e1e7ec !important;
    display: table-cell;
    width: 65%;
    padding: 15px;
    vertical-align: middle;
}



.card-img-tiles .thumblist>img {
    display: block;
    width: 100%;
    margin-bottom: 6px;
}
.btn-group-sm>.btn, .btn-sm {
    padding: .45rem .5rem !important;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}
body {
  font-family: "Lato", sans-serif;
   background-size: 100% 100%;
  background-color: #cccccc;
}

</style>


<header>
  
  <video width="100%" height="100%" autoplay muted  loop >
  <source src="img/headerv.mp4" type="video/mp4">
  </video>
  </header>

</head>
<body>
  <div class="container mt-100">
                            		

                            	
                               
    <div class="row">
          

        <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="/store" data-abc="true">
        <div class="inner">
        <div class="main-img"><img src="https://m.media-amazon.com/images/I/71jTFnk7XiL._AC_SX425_.jpg" alt="Category"></div>
        <div class="thumblist"><img src="https://m.media-amazon.com/images/I/81gK08T6tYL._AC_SL1500_.jpg" alt="Category"><img src="https://m.media-amazon.com/images/I/81ki1d04j0L._AC_SX569_.jpg" alt="Category"></div>
        </div></a>
        <div class="card-body text-center">
        <h4 class="card-title">Laptops</h4>
        <p class="text-muted">Starting from SAR 3499</p><a class="btn btn-outline-primary btn-sm" href="/store" data-abc="true">View Products</a>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
        <div class="inner">
        <div class="main-img"><img src="https://i.imgur.com/uRgdVY1.jpg" alt="Category"></div>
        <div class="thumblist"><img src="https://i.imgur.com/VwSKS7A.jpg" alt="Category"><img src="https://i.imgur.com/gTvZ2H5.jpg" alt="Category"></div>
        </div></a>
        <div class="card-body text-center">
        <h4 class="card-title">Computers</h4>
        <p class="text-muted">Starting from SAR 2999</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mb-30"><a class="card-img-tiles" href="/phone" data-abc="true">
        <div class="inner">
        <div class="main-img"><img src="https://m.media-amazon.com/images/I/61neRCwtBNL._AC_SX679_.jpg" alt="Category"></div>
        <div class="thumblist"><img src="https://fdn2.gsmarena.com/vv/bigpic/google-pixel7-pro-new.jpg" alt="Category"><img src="https://m.media-amazon.com/images/I/71yzJoE7WlL._AC_SX679_.jpg" alt="Category"></div>
        </div></a>
        <div class="card-body text-center">
        <h4 class="card-title">Phones</h4>
        <p class="text-muted">Starting from SAR 2999</p><a class="btn btn-outline-primary btn-sm" href="/phone" data-abc="true">View Products</a>
        </div>
        </div>
        </div>
        </div>
        </div>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Gamely</h2>
    <p class="w3-opacity"><i>About Gamely</i></p>
    <p class="w3-justify">  Gamely is a computer store that specializes in gaming computers/laptops. We offer a wide variety of gaming computers, from budget-friendly options to high-end machines. We also offer a variety of gaming accessories, such as monitors, keyboards, and mice.

    Our team of experts is passionate about gaming and computers. We are always up-to-date on the latest gaming technology and we are committed to helping you find the perfect gaming computer for your needs</p>
    <div class="w3-row w3-padding-32">
      
      </div>
      
 



  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>SaudiArabia-Makkah-Jeddah<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +966563276677<br>
        <i class="fa fa-envelope" style="width:30px"> </i>Fahadalahmadi998@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->



</body>
</html>

@endsection
