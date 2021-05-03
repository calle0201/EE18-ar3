<?php
/**
 * Skriv ett skript som tar en siffra (från formuläret i uppgift 1.4) som innehåller dagens temperatur i Celsius. Programmet ska sedan skriva ut hur många grader Fahrenheit det motsvarar enligt följande mall: 
 * "100 grader Celsius motsvarar 212 grader Fahrenheit". 
 * Formeln för omvandlingen är F = (9/5)*C + 32 där F står för grader Fahrenheit och C för grader Celsius.
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
        <?php
        // Ta emot data från formuläret
        $celsius = $_POST["celsius"];

        // Omvandla till Farenheit
        $farenheit = $celsius * 9 / 5 + 32;

        // Skriv ut svaret
        echo "<p>$celsius&deg; Celsius motsvarar $farenheit&deg; Fahrenheit</p>";
        ?>
    </div>
</body>
</html>