<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Squad Goals</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/homestyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- WOW Animation -->
<link rel="stylesheet" href="animate.css/animate.css">
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

</head>
<body>




<!-------------------------- Navbar -------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="images/logo.png" style="height: 50px;">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pfile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" onclick="scrollToGames()">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)" onclick="scrollToAbout()">About</a>
      </li>

    <div id="logout " style="margin-left: 900px;">
       <li class="nav-item ">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </div>

    </ul>
   
  </div>
</nav>
<!-- ------------------------Navbar ends -------------------------------------- -->






<!-- --------------------------Carousel--------------------------------------- -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/14.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/13.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/15.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- --------------------------Carousel End-------------------------------- -->






<!-- --------------------------Card Games------------------------------- -->

<div class="section section-games">
<div class="row justify-content-center ">
<div class="card" style="width: 18rem;">

  <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><h4>Ragnarok Mobile</h4>Ragnarok M: Eternal Love is an open world MMORPG based on the ever famous Ragnarok Online, and inherits the RO legacy that drew the attention of millions of player</p>
    <a href="https://www.ragnaroketernallove.com/">
<button type="button" class="btn btn-outline-success">Learn More</button></a>
 </div>
</div>


<div class="card" style="width: 18rem;">
 <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><h4>Mobile Legends</h4>Mobile Legends: Bang Bang is a multiplayer online battle arena mobile game developed and published by Shanghai Moonton Technology. The game has become popular in Southeast Asia and will be a medal event at the 2019 Southeast Asian Games.</p>
     <a href="https://m.mobilelegends.com/en">
    <button type="button" class="btn btn-outline-success">Learn More</button></a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><h4> Dota 2 </h4>Dota 2 is a multiplayer online battle arena video game developed and published by Valve Corporation. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III: Reign of Chaos and its expansion pack, The Frozen Throne. </p>
     <a href="http://blog.dota2.com/?l=english">
    <button type="button" class="btn btn-outline-success">Learn More</button>  </a>
  </div>
</div>

<div class="card" style="width: 18rem;">
   <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
   <div class="card-body">
    <p class="card-text"><h4>PlayerUnknown's Battlegrounds</h4>PlayerUnknown's Battlegrounds is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. </p>
    <a href="https://www.pubg.com/">
    <button type="button" class="btn btn-outline-success">Learn More</button>  </a>
  </div>
</div>

<div class="card" style="width: 18rem;">
   <img class="card-img-top" src="images/11.jpg" alt="Card image cap">
   <div class="card-body">
    <p class="card-text"><h4>Clash of Clans</h4>Clash of Clans is a freemium mobile strategy video game developed and published by Finnish game developer Supercell. The game was released for iOS platforms on August 2, 2012, and on Google Play for Android on October 7, 2013.</p>
     <a href="https://clashofclans.com/">
    <button type="button" class="btn btn-outline-success">Learn More</button>  </a>
  </div>
</div>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="images/12.jpg" alt="Card image cap">
    <div class="card-body">
    <p class="card-text"><h4>Leage of Legends</h4>League of Legends is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and macOS. The game follows a freemium model and is supported by microtransactions, and was inspired by the Warcraft III: The Frozen Throne mod, Defense of the Ancients.</p>
     <a href="https://na.leagueoflegends.com/en/">
    <button type="button" class="btn btn-outline-success">Learn More</button> </a>
  </div>
</div>
</div>

<!-- -------------------------Card End----------------------------- -->





<!-- ---------------------------Jumbotron About--------------------- -->
<div class="row d-flex justify-content-center">
  <div class="col-lg-12 col-md-12 col-sm-12">
<div class="section section-about">
<div class="jumbotron" style="background-image: url('images/16.jpg')">
  <h1 class="display-5">About this site</h1>

<h4>-Find a Tournament</h4>
<h4>-Contact your Squad</h4>
<h4>-Meet your Squad</h4>
<h4>-Compete with Others</h4>

  
</div>
</div>
</div>
<!-- --------------------------Jumbotron End------------------------- -->


<!-- --------------------------You tube----------------------------- -->
<div class="container d-flex justify-content-center">
 <div class="row" style="margin-right: 0px !important;">
    <div class="col-sm-12 col-md-12 col-lg-6">
     
      <h4>Latest Tournament Online</h4>
     <iframe width="500" height="315" src="https://www.youtube.com/embed/lfy9jQ7QLRc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<div class="col-sm-12 col-md-12 col-lg-6">
    
     <h4>Latest Tournament Mobile</h4>
   <iframe width="500" height="315" src="https://www.youtube.com/embed/cYQ-k99Mgcs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ----------------------------You Tube End --------------------------- -->



<!------------------------------- Footer ----------------------------------->

<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container d-flex justify-content-center">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <a href="https://www.facebook.com/groups/2302705493304170/">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a></a>
          <!-- Twitter -->
          <a class="tw-ic">
            <a href="https://twitter.com/quinto_rafaela">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a></a>
          
          <!--Linkedin -->
          <a class="li-ic">
            <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFw_8bT0oUfrAAAAWrJ6FZADZ0FfV_Lr0iGiYzJ4K7pU4MBtSob-Os_raOwpOmCF3T-sk7yFUsMsIoK30PzUHF6Dww2xgK7qBgyCMHYiUGXDt2IOAFCfiISXQBo87MtC2eS3lI=&originalReferer=https://l.facebook.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fsquad-goals-240378187%2F">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a></a>
          <!--Instagram-->
          <a class="ins-ic">
            <a href="https://www.instagram.com/squadgoals305/">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a></a>
          <!--Pinterest-->
          <a class="pin-ic">
            <a href="https://www.pinterest.ph/rafaelaquinto26/">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a></a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> Squad Goals</a>
  </div>
  <!-- Copyright -->

</footer>
<!----------------------------------------- Footer end---------------------------- -->
 








  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>


 <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToAbout() {

      if ($('.section-about').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-about').offset().top
        }, 1000);
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToGames() {

      if ($('.section-games').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-games').offset().top
        }, 1000);
      }
    }
  </script>



</body>
</html>

