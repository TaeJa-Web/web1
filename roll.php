
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Masa Sushi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand">Masa Sushi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reservation.php" tabindex="-1" aria-disabled="true">Reservation</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="roll.php">Rolls</a>
          <a class="dropdown-item" href="hotfood.php">Hot foods</a>
          <a class="dropdown-item" href="special.php">Masa Specials</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="live.php">live comments</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <img src="http://sushimasa.ca/images/MasaLogo_trans.png" id="masa2">
    <div class="row">
      <div class="col-md-4">
        <p id="menuTitle">KNIGHTS OF THE ROUND TABLE <span >16.95</span></p>
            <P id='menuDescription'>deep fried sushi rice with 8 kinds of seafoods and special sauce</p>

            <p id="menuTitle">OSHI SUSHI <span class="menuDescriptionSub">GRILLED SUSHI WITH CREAMY SAUCE, JALAPENO</span></p>
            <ul>
            <li id="menuTitleSub">ATLANTIC SALMON <span >12.95 </span></li>
            <li id="menuTitleSub">SPICY ATLANTIC SALMON <span >13.95 </span></li>
            <li id="menuTitleSub">WILD SALMON <span >13.95 </span></li>
            <li id="menuTitleSub">SPICY WILD SALMON <span >14.95 </span></li>
            </ul>
            <P id='menuDescriptionSub'></p>

            <p id="menuTitle">MASA ABURI CHEESE MONSTER<span >12.95</span></p>
            <P id='menuDescription'>aburi salmon, avocado, crab meat with chedar & mozza, tobiko</p>

              <!-- <p class="menuTitle">hot smoky sensation roll<span >11.95</span></p>
                <P class='menuDescription'>spicy pink & red torch with scallop, tobiko, avocado crabmeat</p> -->
            <p id="menuTitle">CRISPY JUMBO DYNAMITE ROLL<span > 12.95 </span></p>
            <P id='menuDescription'>deep fried jumbo prawn with crunch, special spicy sauce  </p>
            <p id="menuTitle">DOUBLE DRAGON<span > 12.95 </span></p>
            <P id='menuDescription'>unagi roll with double unagi. masago, green onion on top  </p>

      </div>
      <div class="col-md-4">
            <p id="menuTitle">ROMEO ROLL <span >12.95</span></p>
            <P id='menuDescription'>seared with prawn, crabmeat, avo, cucumber, mozza, balsamic</p>

            <p id="menuTitle">JULIET ROLL <span >12.95</span></p>
            <P id='menuDescription'>seared with jalapeno, crabmeat, avo, cucumber, mozza, balsamic</p>

            <p id="menuTitle">SAKE BOMB ROLL <span >12.95</span></p>
            <P id='menuDescription'>spicy salmon roll with seared salmon and special spicy sauce</p>

            <p id="menuTitle">TEKKA BOMB ROLL <span >12.95</span></p>
            <P id='menuDescription'>spicy tuna roll with seared tuna and special spicy sauce</p>

            <p id="menuTitle">MANGO PARADISE ROLL   <span > 10.95 </span></p>
            <P id='menuDescription'>salmon, avocado with mango salsa </p>
            <p id="menuTitle">SPICY MAKI FLOWER   <span >9.95 </span></p>
            <P id='menuDescription'>kappa, salmon, tuna rolls with spicy sauce</p>
      </div>
      <div class="col-md-4">

             <p id="menuTitle">GREEN MONSTER ROLL    <span >11.95 </span></p>
             <P id='menuDescription'>yam avo roll with scallop, avo, wasabi mayo on top </p>

             <p id="menuTitle">CRAZY TUNA ROLL    <span >11.95 </span></p>
             <P id='menuDescription'>yam tempura, avo roll with spicy tuna and spicy mayo on top </p>

             <p id="menuTitle">EX-BOY FRIEND ROLL   <span >12.95  </span></p>
             <P id='menuDescription'>dynamite roll with salmon, masago, bonito, green onion, sauce </p>

             <p id="menuTitle">EX-GIRL FRIEND ROLL   <span >8.95  </span></p>
             <P id='menuDescription'>yam tempura, avo roll with mango salsa, red beets on top </p>

            <p id="menuTitle">FISH & CHIPS 2 HAND CONE    <span > 7.95</span></p>
            <P id='menuDescription'>soy bean paper cone with deep fried fish, tatar sauce, tobiko </p>

             <p id="menuTitle">BROADWAY CRAZY BOYS ROLL  <span >6.95</span></p>
             <P id='menuDescription'>deep fried california roll with unagi sauce </p>

  </div> <!-- /container -->

</main>
<img onclick="imgGet('0')" id="0" class='modalImg' src="http://sushimasa.ca/images/CRISPY%20DYNAMITE.jpg" alt="CRISPY JUMBO DYNAMITE ROLL" title="CRISPY JUMBO DYNAMITE ROLL" width="220" >
<img onclick="imgGet('1')" id="1" class='modalImg' src="http://sushimasa.ca/images/DEVIL'S%20KISS.jpg" alt="DEVIL'S KISS"  title="DEVIL'S KISS" width="220" >
<img onclick="imgGet('2')" id="2" class='modalImg' src="http://sushimasa.ca/images/KNIGHT%20OF%20THE%20ROUND%20TABLE.jpg" alt="KNIGHT OF THE ROUND TABLE"  title="KNIGHT OF THE ROUND TABLE" width="220" >
<img onclick="imgGet('3')" id="3" class='modalImg' src="http://sushimasa.ca/images/SUSHI%20BOLOGNESE.jpg" alt="SUSHI BOLOGNESE"  title="SUSHI BOLOGNESE" width="220" >
<img onclick="imgGet('4')" id="4" class='modalImg' src="http://sushimasa.ca/images/SUSHI%20SALSA%20DI%20VERDE.jpg" alt="SUSHI SALSA DI VERDE"  title="SUSHI SALSA DI VERDE" width="220" >
<img onclick="imgGet('5')" id="5" class='modalImg' src="http://sushimasa.ca/images/SAKE%20BOMB.jpg" alt="SAKE BOMB ROLL"  title="SAKE BOMB ROLL" width="220" >
<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
