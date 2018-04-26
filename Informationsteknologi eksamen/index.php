<?php
session_start();
if($_GET['info'] == "login"){
    echo("<br>Du er nu logget ind og kan se bagere i nærheden");
  }
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Eksamensprojekt lavet af Jonas Urup & Jacob Skadborg. Index side">
    <meta name="author" content="Jonas Urup & Jacob Skadborg">

    <title>Informationsteknologi Eksamen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" style="color: white;">Bager Bestillingen</a>
        <img src="images/BB.png" style="height: 60px; width: 60;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Hjem
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="log_ind.php">Log ind</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrer.php">Registrer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bestil.php">Bagere i nærheden</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-1 text-center text-black mt-4">Bager Bestillingen</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">Bestilling af varer</h2>
          <p>Det er nu muligt at bestille dit brød hjemmefra!</p>
          <p>Find de bedste tilbud først og så kan du bestille ved blot et klik.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="bestil.php">Bestil &raquo;</a>
          </p>
          <h2>Nyheder fra bagerierne</h2>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Find din bager</h2>
          <address>
            <strong>Bagere i nærheden</strong>
            <br>Langenæs Bageri, Vejle
            <br>Lagkagehuset, Vejle
            <br>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="images/Langenæs_bageri.jpeg" style="height: 230px; width: 348px;" alt="">
            <div class="card-body">
              <h4 class="card-title">Tilbud i Langenæs bageri, Vejle</h4>
              <p class="card-text">Se alle tilbud Langenæs bageri i Vejle har lige nu til dig!</p>
            </div>
            <div class="card-footer">
              <a href="http://www.langenaesbageriet.dk/langenaes-bageriet-vejle/" class="btn btn-primary">Besøg Langenæs bageri</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="" style="height: 230px; width: 348px;" alt="">
            <div class="card-body">
              <h4 class="card-title">Titel</h4>
              <p class="card-text">Tekst</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="" style="height: 230px; width: 348px;" alt="">
            <h4 class="card-title">Titel</h4>
              <p class="card-text">Tekst</p>
              <div class="card-body">
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>