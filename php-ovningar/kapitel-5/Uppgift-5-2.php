<?php
/**
 * Gör en webbapp  som i en textruta frågar efter ett filnamn på servern. Öppna filen och skriv ut filinnehållet på skärmen. 
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
    <title>Läs en textfil</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Läs en textfil</h1>
        <form action="#" method="POST">
            <label for="text">Ange filens namn</label>
            <input type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Hämta</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["filnamn"])) {

            // Läs in texten från formuläret
            $filnamn = $_POST["filnamn"];

            // Läs av från filen

            //Skriv ut på skärmen
            
        }
        ?>
    </div>
</body>
</html>