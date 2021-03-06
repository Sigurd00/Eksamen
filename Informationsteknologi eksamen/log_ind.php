<?php
include 'connect.php';
session_start();
echo("<br>");
if($_GET['info'] == "nologin"){
  echo("Du er blevet omstillet til log ind siden da du skal logge ind for at kunne bestille");
}

if (isset($_POST['submit'])) {
  
  // email og password sendt from form 
   
  $myemail = $_POST['inputEmail'];
  $mypassword = $_POST['inputPassword']; 
   
  $sql = "SELECT id FROM eksamen_users WHERE email = '$myemail' AND password = '$mypassword'";
  $result = $mysqli->query($sql);
  $count = $result->num_rows;
   
  // Hvis $count er 1 så må der være en email der passer til
  // Hvis det er mere end 1 så er der tydeligvis noget galt.
  // Da vi ikke har gjort at man ikke må have en email som er identisk med en anden så lad for guds skyld være med at bruge den samme email 2 gange. DET VILLE RESULTERE I TOTAL DESTRUCTION
     
  if($count == 1) {
      
    $_SESSION['login_user'] = $myemail;
      
    header("Location: index.php?info=login");
    //Man er logget ind.
  }else {
    echo("Dit log ind navn eller din adgangskode er forkert, prøv venligst igen");
  }  
}

?>
<html lang="en">

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
                <a class="nav-link" href="index.php">Hjem
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="log_ind.php">Log ind</a>
                <span class="sr-only">(current)</span>
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
              <p> Har du ikke en bruger? Så registrer her </p>
              <a href="log_ind.php" class="btn btn-default btn-lg active" role="button">Registrer</a>
           </div>
        </div>
</body>
</html>
