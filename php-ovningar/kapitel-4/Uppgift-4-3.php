<?php

/**
 * Skriv en webbapp där användaren matar in ett tal 1-9 och sedan returnerar det svenska namnet för talet (ett, två, tre osv). Om talet är större än 9 så skriver du i stället talet som vanligt (tex. 11). 
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Array med namn</h1>
        <form action="#" method="POST">
            <label for="namn">Ange ett tal</label>
            <input id="namn" class="form-control" type="text" name="tal">

            <button type="submit" class="btn btn-primary">Räkna ut</button>
        </form>

        <?php
        // Finns data?
        if (isset($_POST["tal"])) {

            // Ta emot data från formuläret
            $tal = $_POST["tal"];

            // Man behöver en array
            $siffror = ["Noll", "Ett", "Två", "Tre", "Fyra", "Fem", "Sex", "Sju", "Åtta", "Nio"];

            if ($tal < 10) {

                // Skriv ut svaret som text (Noll .. Nio)
                echo "<p>$siffror[$tal]</p>";
            } else {

                // Skriv ut svaret som siffror (10, 11, 12..)
                echo "<p>$tal</p>";
            }
        }
        ?>
    </div>
</body>
</html>