<?php
    require 'connect.php';
    session_start();
    $username=$password="";


    if (isset($_POST['login'])) {
        $username = $_POST['inputUsername'];
	    $password = $_POST['inputPassword'];
        
    }
    
    if($username != ""){
        $res = $mysqli->query("SELECT id, username, password FROM users WHERE username='$username'");
        $row = mysqli_fetch_array($res);
        $count = mysqli_num_rows($res); 
        
        if( $count == 1 && $row['password']==$password ) {
         $_SESSION['user'] = $row['id'];
         
         header("Location: Laasdinbil.php");
        } else {
         echo "WRONG!!!";
        }
    }
?>
<html>
    <head>
        <title>Lås Din Bil</title>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">      
    </head>

    <body>
        <div class="row">
            <div class="col-sm-2">
            <img src="Logo.png">
            </div>
            <div class="col-sm-8 text-center">
            <p>Lås din bil</p>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-10">
                    <form method="post">
                        <h2>Login</h2>

                        <label>Brugernavn:</label>
                        <input type="text" id="inputUsername" name="inputUsername" placeholder="Brugernavn" required>

                        <label>Adgangskode:</label>
                        <input type="password" id="inputPassword" name="inputPassword" placeholder="Adgangskode" required>
                        <br>
                        <input type="submit" id="login" name="login" value="Login">
                        <p>Har du ikke en bruger? <a href="registrer.php">Registrer her</a>.</p>
                    </form>
                </div>
                <div class="col-sm-2">
                    <p>Navbar</p>
                    <a href="Laasdinbil.php">Velkommen</a> <br>
                    <a href="Opel.php">Din bil</a>
                    <ul>
                        <li><a href="hvemkoerer.php">Hvem kører</a></li>
                        <li><a href="fotogalleri.php">Hvem har været i bilen</a></li>
                    </ul>
                    <a href="omos.php">Om os</a> <br>
                    <a href="Noedoplaas.php">Nødoplås</a>
                </div>
            </div>
    </body>
</html>