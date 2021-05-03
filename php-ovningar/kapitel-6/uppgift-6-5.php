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
    <title>Passwordmeter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Passwordmeter</h1>
        <form action="#" method="POST">
            <label for="lösen">Ange ditt lösenord</label>
            <input id="lösen" class="form-control" type="text" name="lösen" required>
            <button type="submit" class="btn btn-primary">Testa</button>
        </form>

        <?php
        // Läs in från formuläret och rensa från hot
        $lösen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING);

        // Om vi har data
        if ($lösen) {
            // Minimum 8 characters in length
            $längd = strlen($lösen);
            if ($längd < 8) {
                echo "<p>Lösenordet är för kort</p>";
            } else {
                echo "<p>Lösenordet har en bra längd</p>";
            }

            // Uppercase Letters
            $versaler = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö"];
            // Testa alla bokstäver en i taget
            $flagga = false;
            foreach ($versaler as $versal) {
                $pos = strpos($lösen, $versal);
                if ($pos !== false) {
                    $flagga = true;
                }
            }
            if ($flagga == true) {
                echo "<p>Lösenordet innehåller minst en versaler</p>";
            } else {
                echo "<p>Lösenordet innehåller inga versaler</p>";
            }
            
            // Lowercase Letters



            // Numbers



            // Symbols

        }
        ?>
    </div>
</body>
</html>