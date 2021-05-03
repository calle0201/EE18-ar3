<?php
/**
 * Gör ett formulär där användaren kan välja bland fyra färger att "måla" bakgrunden med för webbsidan som kommer upp när han/hon klickat på knappen Måla bakgrund. Skapa sedan ett skript som verkligen gör detta. Färgerna ska vara röd, blå, grön och gul.
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
    <title>Byta bakgrundsfärg</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$färg = $_POST["färg"];
echo "<body style=\"background: $färg;\">";
?>
</body>
</html>