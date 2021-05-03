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
    <title>Tal till text</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Spara i gästboken</h1>
        <form action="#" method="POST">
            <label for="namn">Ange dit namn</label>
            <input type="namn" name="namn">
            <label for="mail">Ange din mail</label>
            <input type="mail" name="mail">
            <label for="meddelande">Ange ditt meddelande</label>
            <textarea name="meddelande" id="meddelande" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Spara</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["namn"], $_POST["email"], $_POST["meddelande"])) {

            // Läs in texten från formuläret
            $namn = $_POST["namn"];
            $email = $_POST["email"];
            $meddelande = $_POST["meddelande"];

            // Spara snyggt formaterat i gästbok-filen
            $handtag = fopen("gastbok.txt", "a"); // a = append

            // Spara namn + email + <br> på en rad
            fwrite($handtag, "$namn $email <br>\n");

            // Spara meddelande + <br> pen en rad till
            fwrite($handtag, "$meddelande<br>\n");

            // Stäng ned filen
            fclose($handtag);
        }
        ?>
    </div>
</body>
</html>