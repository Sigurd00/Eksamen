<?php

include 'connect.php';

if (isset($_POST['submit'])) {
	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];
    $remember = $_POST['remember-me'];
}

$mysqli->close();
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
                <a class="nav-link" href="index.html">Hjem
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Om_os.html">Om os</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Bestil.html">Bestil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Kontakt_os.html">Kontakt os</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <div class="row justify-content-center"></div>
          <div class="col-sm-6">
            
              <form class="form-signin">
                <h2 class="form-signin-heading mt-4">Log venligst ind</h2>
                <label for="inputEmail" class="sr-only">Email adresse</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email adresse" required autofocus>
                <label for="inputPassword" class="sr-only">Adgangskode</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Adgangskode" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Husk mig
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log ind</button>
              </form>
        
           </div>
        </div>

</body>







</html>