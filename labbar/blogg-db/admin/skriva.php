<?php
/*
* en enkel blogg som använder en databas
* 
* PHP version 7
* @category   webbaplikation med databas
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/
include "./resurser/conn.php";
?>


<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minblogg</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
        <li class="nav-item"><a class="nav-link active" href="./skriva.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="./sok.php">sök</a></li>
    </ul>
</nav>
    <h1>Spara ditt namn</h1>
    <form action="#" method="POST">
        <label>Ange rubrik <input type="text" name="header"></label>
        <label>Ange text <input type="text" name="postText"></label>
        <button>Spara</button>
    </form>
    <?php
    // Ta emot det som skickas
    $header = filter_input(INPUT_POST, 'header', FILTER_SANITIZE_STRING);
    $postText = filter_input(INPUT_POST, 'postText', FILTER_SANITIZE_STRING);
    
    // Om data finns..
    if ($header && $postText) {
        // Programmets kod
        $sql = "INSERT INTO blogg (header, PostText) VALUES ( '$header', '$postText')";

        //steg 2: ladda upp till server
       $resultat = $conn->query($sql);

       //did it run?
       if (!$resultat) {
           die("något gick fel");
       } else {
           echo "<p>inlägget har registras</p>";

           //steg 3: close connection
           $conn->close();
       }
     
      
       
  
    }
    ?>
</div>
</body>
</html>