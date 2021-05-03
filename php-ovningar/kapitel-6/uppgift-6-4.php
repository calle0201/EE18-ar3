<?php

/**
 * Skriv ett skript som frågar efter två heltal via ett formulär, det första talet ska vara lägre än det andra. Skriv ut alla heltal mellan de två som matats in. Separera med mellanslag. Varna om tal 1 är större än tal 2.
 * 
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
    <title>Parsa epost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Parsa epost</h1>
        <form action="#" method="POST">
            <label for="epost">Ange epost</label>
            <input id="epost" class="form-control" type="text" name="epost" required>
            <button type="submit" class="btn btn-primary">Parsat</button>
        </form>

        <?php
        // Läs in från formuläret och rensa från hot
        $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);

        // Om vi har data
        if ($epost) {

            // Dela upp med explode()
            $delar = explode("@", $epost);
            // var_dump($delar);
            
            echo "<p>Namndelen: $delar[0]</p>";
            echo "<p>Domän: $delar[1]</p>";

            // Dela upp substr() på karim@gmail.com
            $namn = substr($epost, 0, 5); // hårdkodat!
            $domän = substr($epost, -9); // hårdkodat!

            echo "<p>Namndelen är '$namn', och domän är '$domän'</p>";

            // Dela upp med substr() mha strpos()
            // Hitta position på '@' i $epost
            $position = strpos($epost, "@");
            
            echo "<p>'@' finns på position $position</p>";
            $namn = substr($epost, 0, $position);
            echo "<p>Namndelen är '$namn'</p>";
            $domän = substr($epost, $position + 1);
            echo "<p>Domän är '$domän'</p>";

            // Räkna antalet tecken i $epost
            $längd = strlen($epost);
            echo "<p>Antalet tecken är $längd</p>";
            $domän = substr($epost, -($längd - $position - 1));
            echo "<p>Domän är '$domän'</p>";

            // Kan vi använda strstr()?
            $domän = strstr($epost, "@");
            $domän = substr($domän, 1); // För att hoppa över första @-tecken
            echo "<p>Domän är '$domän'</p>";
            $namn = strstr($epost, "@", true);
            echo "<p>Namndelen är '$namn'</p>";
        }
        ?>
    </div>
</body>
</html>