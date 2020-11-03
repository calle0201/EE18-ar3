<?php
/*
* PHP version 7
* @category   
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filhantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <?php
        $epost = " calle.edenflod@mail.com ";
        echo "<p>*$epost*</p>";
        $epost = trim($epost);
        echo "<p>*$epost*</p>";

        $stycke = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, temporibus error! Quia adipisci excepturi quibusdam maxime iste sit fugit cumque odit officia? Dicta commodi eveniet distinctio ab ea? Optio, beatae!";

     $stycke =  strlen($stycke);
     echo "<p>stycke är $stycke lång</p>";
     $epost = "calle.edenflod@mail.com";

    $förnamn = substr($epost,0, 5);
    $efternamn = substr($epost, 6, 8);
    $domän = substr($epost,15,4);
    echo "<p>$förnamn ur epost</p>";
    echo "<p>$efternamn ur epost</p>";
    echo "<p>$domän</p>";

    $hittatecken = strstr($epost,"@",);
    echo "<p>$hittatecken</p>";
    $hittatecken = strpos($epost,"@",);
    echo "<p>@ ligger på pos $hittatecken</p>";


    if (strpos($epost,"ntig") !== false) {
        echo "<p>ja nti finns i epost</p>";
    } else {
        echo "<p>nej nti finns i epost</p>";
    }
    

    $texten = "jag är elev på NTI";
    $nyText = str_replace("jag", "Carl",$texten);

    echo "<p>$texten</p>";
    echo "<p> $nyText</p>";

        ?>
    </div>
</body>
</html>