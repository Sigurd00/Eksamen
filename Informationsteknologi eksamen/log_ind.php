<?php
    include 'connect.php';
    session_start();
    $username=$password="";


    if (isset($_POST['submit'])) {
      $username = $_POST['inputUsername'];
	    $password = $_POST['inputPassword'];
        
    }
    
    if($username != ""){
        $res = $mysqli->query("SELECT id, email, password FROM $table_5 WHERE email='$username'");
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); 
    
        if( $count == 1 && $row['password']==$password ) {
         $_SESSION['user'] = $row['id'];
         
         header("Location: bestil.php");
        } else {
         echo "WRONG!!!";
        }
    }
    echo $mysqli->error;
?>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Eksamensprojekt lavet af Jonas Urup & Jacob Skadborg. Log ind side">
    <meta name="author" content="Jonas Urup & Jacob Skadborg">

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
              <li class="nav-item">
                <a class="nav-link" href="index.html">Hjem
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="log_ind.php">Log ind</a>
                <span class="sr-only">(current)</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrer.php">Registrer</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row justify-content-center"></div>
          <div class="col-sm-6">
            
              <form class="form-signin" method="post">
                <h2 class="form-signin-heading mt-4">Log ind</h2>
                <label for="inputEmail" class="sr-only">Email adresse</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email adresse" name="inputEmail" required autofocus>
                <label for="inputPassword" class="sr-only">Adgangskode</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Adgangskode" name="inputPassword" required>
                <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" name="submit">Log ind</button>
              </form>
              <p> Har du ikke en bruger, så registrer dig her:</p>
              <a href="log_ind.php" class="btn btn-default btn-lg active" role="button">Registrer</a>
           </div>
        </div>
</body>
</html>