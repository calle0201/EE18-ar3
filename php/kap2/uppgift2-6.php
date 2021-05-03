<?php
/*
* PHP version 7
* @category   Lånekalkylator
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
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
    $celsius = $_POST["celsius"];
    $temp = $_POST["temp"];

if ($temp == "f") {
        $farenheit = $celsius *  9/5 + 32 . " F";
        echo "<p>$celsius &deg; celsius är $farenheit</p>";
} else if ($temp == "c") {
        $farenheit = ($celsius - 32) *5/9 . "C";
        echo "<p>$celsius &deg; farenheit är $farenheit</p>";
} else if ($temp == "k") {
    $farenheit = $celsius +  273.15 . "K";
        echo "<p>$celsius &deg; celsius är $farenheit</p>";
}


   
 
    
    ?>
</body>
</html>