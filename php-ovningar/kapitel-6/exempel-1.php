<?php
/**
* PHP version 7
* @category   
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stränghantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Rensa från mellanslag i början och slutet på en text
        $epost = " karim@gmail.com      ";
        $epostTrimmad = trim($epost);
        echo "<p>**$epost**$epostTrimmad**</p>";

        // omvandla till små eller bara stora bokstäver
        $svar = "Usa"; // USA, usa, uSa
        $svarGemena = strtolower($svar);
        $svarVersaler = strtoupper($svar);
        $svenska = mb_strtoupper("Hej på dig, är det bra?");
        echo "<p>$svenska</p>";

        // Hur många tecken innehåller detta stycke?
        $stycke = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At iste ullam architecto dolor corrupti minima, illo eius nostrum impedit nam aspernatur doloremque explicabo! Sequi maiores dignissimos quam praesentium quisquam error?";
        $antal = strlen($stycke);
        echo "<p>Antal tecken = $antal</p>";

        // Plocka del av en sträng
        $epost = "karim.ryde@ga.ntig.se";
        $förnamn = substr($epost, 0, 5);
        echo "<p>$förnamn ur $epost</p>";
        $efternamn = substr($epost, 6, 4);
        echo "<p>$efternamn ur $epost</p>";

        $domän = substr($epost, 11, 10);
        echo "<p>$domän ur $epost</p>";
        $domän = substr($epost, -10);
        echo "<p>$domän ur $epost</p>";

        // Plocka domän ur en epost
        $epost = "karim@ga.ntig.se";
        $domän = strstr($epost, "@");
        echo "<p>$domän ur $epost</p>";

        // Hitta position på @-tecknet 
        $epost = "karim@ga.ntig.se";
        $position = strpos($epost, "@");
        echo "<p>@ ligger på position $position</p>";

        // Finns "ntig" i inmattad epost-adressen?
        $epost = "karim@ga.ntig.se";
        if (strpos($epost, "ntig") !== false) {
            echo "<p>Ja, ntig finns i epost-adressen!</p>";
        } else {
            echo "<p>Nej!</p>";
        }
        
        // Ersätta text i sträng
        $texten = "Karim är läraren i webb.";
        $nyText = str_replace("Karim", "Carl", $texten);
        echo "<p>$nyText</p>";
        ?>
    </div>
</body>
</html>