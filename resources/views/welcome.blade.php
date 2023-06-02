@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  head{
 
}
body {
  font-family: "Lato", sans-serif;
  background-image: url("img/headerv.png");
  background-repeat: no-repeat;
   background-attachment: fixed;
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