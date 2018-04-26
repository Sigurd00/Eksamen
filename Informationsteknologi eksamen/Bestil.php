<?php
//if (session_status() == PHP_SESSION_NONE) {
//  echo "<p> Log venligst ind: <br>
//    <a href=\"log_ind.php\" class=\"btn btn-default btn-lg active\" role=\"button\">Gå til log in side</a>";
//    exit;
//}
if($_SESSION['login_user'] == ""){
  header("Location: log_ind.php?info=nologin");
}
?>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informationsteknologi Eksamen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
</head>


<body>
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
                <a class="nav-link" href="index.html">Bagere i nærheden
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Hjem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrer.php">Bestil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bestil.php">Kontakt os</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">

      <div class="row">
        <div class="col-sm-8">
          <h2 class="mt-4">Bestilling af varer</h2>
          <p>Det er nu muligt at bestille dit brød hjemmefra!</p>
          <p>Find de bedste tilbud først og så kan du bestille ved blot et klik.</p>
          <p>
          <div class="form-group">
          <form method="post">
          <label for="liste">Select list:</label>
            <select class="form-control" id="liste" name="by">
              <option value="Vejle">Vejle</option>
              <option value="Jelling">Jelling</option>
              <option value="Bredsten">Bredsten</option>
              <option value="Give">Give</option>
            </select>
            <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" name="submit">Find bager</button>
            </form>
          </div> 
          </p>
          <h2>Nyheder fra bagerierne</h2>
        </div>
        <div class="col-sm-4">
          <h2 class="mt-4">Find din bager</h2>
          <?php
          if (!isset($_POST['submit'])) {
            echo "
              <address>
                <strong>Bagere i nærheden</strong>
                <br>Langenæs Bageri, Vejle
                <br>Palles Bageri, Vejle
                <br>Lagkagehuset, Vejle
                <br>Ødsted Bageri, Vejle
                <br>P.a. Andersen & Sønner, Vejle
                <br>og mange flere
              </address>";
            }
          if (isset($_POST['submit']) && $_POST['by'] == 'Vejle') {
            echo "
              <address>
                <strong>Bagere i nærheden</strong>
                <br>Langenæs Bageri, Vejle
                <br>Palles Bageri, Vejle
                <br>Lagkagehuset, Vejle
                <br>Ødsted Bageri, Vejle
                <br>P.a. Andersen & Sønner, Vejle
                <br>og mange flere
              </address>";
              }
            if (isset($_POST['submit']) && $_POST['by'] == 'Jelling') {
              echo "
                <address>
                  <strong>Bagere i nærheden</strong>
                  <br>SuperBrugsen, Jelling
                  <br>Controlstone v/Niels Bager Bæk, Jelling
                  <br>Hjertebageri, Vejle
                  <br>Palles Bageri, Vejle
                </address>";
                }
            if (isset($_POST['submit']) && $_POST['by'] == 'Bredsten') {
              echo "
                <address>
                  <strong>Bagere i nærheden</strong>
                  <br>Dagli'Brugsen, Bredsten
                  <br>Bredsten Hallen's Cafeteria v/Klaus Bager, Bredsten
                  <br>Ny Nørup Bageri, Ny Nørup
                </address>";
                }
            if (isset($_POST['submit']) && $_POST['by'] == 'Give') {
              echo "
                <address>
                  <strong>Bagere i nærheden</strong>
                  <br>Nytorvs Bageri, Give
                  <br>Superbrugsen, Give
                </address>";
                }                        
          ?>
        </div>
      </div>
      
      <iframe
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAbIkMp7dCfdvunIoLwTC8zfAk7pCyYDhU 
          &q=
          <?php
          if (!isset($_POST['submit'])) {
            echo "Vejle+bager";
          }
          if (isset($_POST['submit']) && $_POST['by'] == 'Vejle' ) {
            echo "Vejle+bager";
          }
          if (isset($_POST['submit']) && $_POST['by'] == 'Jelling' ) {
            echo "Jelling+bager";
          }
          if (isset($_POST['submit']) && $_POST['by'] == 'Bredsten' ) {
            echo "Bredsten+bager";
          }
          if (isset($_POST['submit']) && $_POST['by'] == 'Give' ) {
            echo "Give+bager";
          }
          ?>"
          allowfullscreen>
      </iframe>
</body>
</html>