<?php

/**
 * Ändra föregående formulär så att man kan med radioknappar välja mellan "Omvandla från F° till C°" eller "Omvandla C° till F°". Ändra på skriptet så att uträkningen stämmer.
 * 
 * PHP version 7
 * @category   
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Från Celsius till Farenheit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultat</h1>
        <?php
        // Ta emot data från formuläret
        $temperatur = $_POST["temperatur"];   // innehåller temperaturen
        $omvandla = $_POST["omvandla"]; // innehåller FC eller CF

        // Ett val möste göras
/*         if ($omvandla == "CF") {
            // Omvandla till Farenheit
            $farenheit = $temperatur * 9 / 5 + 32;

            // Skriv ut svaret
            echo "<p>$temperatur&deg; Celsius motsvarar $farenheit&deg; Fahrenheit</p>";
        } elseif ($omvandla == "FC") {
            // Omvandla till Celsius
            $celsius =  ($temperatur - 32) * 5 / 9;

            // Skriv ut svaret
            echo "<p>$temperatur&deg; Farenheit motsvarar $celsius&deg; Celsius</p>";
        } else {
            // Omvandla till Kelvin
            $kelvin = $temperatur - 273;

            // Skriv ut svaret
            echo "<p>$temperatur&deg; Celsius motsvarar $kelvin&deg; Kelvin</p>";
        } */

        switch ($omvandla) {
            case 'CF':
                // Omvandla till Farenheit
                $farenheit = $temperatur * 9 / 5 + 32;

                // Skriv ut svaret
                echo "<p>$temperatur&deg; Celsius motsvarar $farenheit&deg; Fahrenheit</p>";
                break;

            case 'FC':
                // Omvandla till Celsius
                $celsius =  ($temperatur - 32) * 5 / 9;

                // Skriv ut svaret
                echo "<p>$temperatur&deg; Farenheit motsvarar $celsius&deg; Celsius</p>";
                break;

            case 'CK':
                // Omvandla till Kelvin
                $kelvin = $temperatur - 273;

                // Skriv ut svaret
                echo "<p>$temperatur&deg; Celsius motsvarar $kelvin&deg; Kelvin</p>";
                break;
        }
        ?>
    </div>
</body>
</html>