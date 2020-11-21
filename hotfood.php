
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
      <div class="col-md-6">
        <h2 class="text-center menuCategory">JAPANESE CURRY</h2>
        <p class="text-center menuDescription">ADD PREMIUM VEGE 2.00, PRAWN 3.00. CHANGE RICE TO UDON NOODLE 3.00</p><br/>
            <p id="menuTitle">VEGGIE CURRY <span >10.95</span></p>
            <p id="menuDescription">japanese curry with vegetable & rice </p>
            <p id="menuTitle">CHICKEN CURRY<span >13.95 </span></p>
            <p id="menuDescription"> japanese curry with chicken & rice</p>
            <p id="menuTitle">BEEF CURRY<span >13.95 </span></p>
            <p id="menuDescription"> japanese curry with beef & rice</p>
            <p id="menuTitle">SHRIMP CURRY<span >14.95</span></p>
            <p id="menuDescription"> japanese curry with shrimp & rice </p>
            <p id="menuTitle">TONKATSU CURRY<span >14.95</span></p>
            <p id="menuDescription"> japanese curry with tonkatsu & rice </p>
            <p id="menuTitle">ASSORTED KATSU CURRY <span > 17.95</span></p>
            <p id="menuDescription">  japanese curry with tonkatsu, ebi fry 2pcs, goroke 1PC & rice</p>
          </div>
            <div class="col-md-6">
        <h2 class="text-center menuCategory">PLATTER</h2>
        <p class="text-center menuDescription">ADD BLACK RICE OR BRAWN RICE 1.00, PREMIUM VEGE 2.00, PRAWN 3.00, NOODLE 3.00</p><br/>
            <p id="menuTitle">TOFU TERIYAKI <span >10.95</span></p>
            <p id="menuDescription">DEEP FRIED TOFU SERVED WITH MIXED VEGETABLE AND RICE </p>
            <p id="menuTitle">BEEF TERIYAKI<span >11.95 </span></p>
            <p id="menuDescription"> GRILLED SLICED BEEF SERVED WITH VEGETABLE AND RICE</p>
            <p id="menuTitle">CHICKEN TERIYAKI<span >11.95 </span></p>
            <p id="menuDescription"> GRILLED SLICED CHICKEN SERVED WITH VEGETABLE AND RICE</p>
            <p id="menuTitle">SALMON TERIYAKI <span >16.95</span></p>
            <p id="menuDescription"> GRILLED SLICED SALMON SERVED WITH VEGETABLE AND RICE </p>
            <p id="menuTitle">TON KATSU<span >11.95</span></p>
            <p id="menuDescription"> DEEP FRIED FORK CUTLET WITH VEGETABLE AND RICE </p>
            <p id="menuTitle">CHICKEN KATSU <span > 11.95</span></p>
            <p id="menuDescription"> DEEP FRIED CHICKEN CUTLET WITH VEGETABLE AND RICE </p>
            <p id="menuTitle">FISH KATSU <span >13.95</span></p>
            <p id="menuDescription"> DEEP FRIED FISH CUTLET WITH VEGETABLE AND RICE </p>
          </div>
      </div>
      </div>
</main>

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>
</html>
