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
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Kontaktformulär</h1>
        <form action="#" method="POST">
            <label for="namn">Ange namn</label>
            <input id="namn" class="form-control" type="text" name="namn" required>
            <label for="adress">Ange adress</label>
            <input id="adress" class="form-control" type="text" name="adress" required>
            <label for="postnr">Ange postnr</label>
            <input id="postnr" class="form-control" type="text" name="postnr" required>
            <label for="postort">Ange postort</label>
            <input id="postort" class="form-control" type="text" name="postort" required>
            <button type="submit" class="btn btn-primary">Skriv ut</button>
        </form>

        <?php
        // Läs in från formuläret och rensa från hot
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
        $postnr = filter_input(INPUT_POST, "postnr", FILTER_SANITIZE_STRING);
        $postort = filter_input(INPUT_POST, "postort", FILTER_SANITIZE_STRING);

        // Om vi har data
        if ($namn && $adress && $postnr && $postort) {

            // Kontrollera att alla fälten innehåller minst 3 tecken: strlen()
            if (strlen($namn) < 3) {
                echo "<p class=\"alert alert-warning\">Namnet måste vara minst 3 tecken långt!</p>";
            }
            if (strlen($adress) < 3) {
                echo "<p class=\"alert alert-warning\">Adressen måste vara minst 3 tecken långt!</p>";
            }
            if (strlen($postort) < 3) {
                echo "<p class=\"alert alert-warning\">Postort måste vara minst 3 tecken långt!</p>";
            }

            // Kontrollera att postnumret innehåller 5 tecken: strlen()
            if (strlen($postnr) < 5) {
                echo "<p class=\"alert alert-warning\">Postnr måste vara minst 5 tecken långt!</p>";
            }

            // Kontrollera att postnumret innehåller endast siffror
            if (!is_numeric($postnr)) {
                echo "<p class=\"alert alert-warning\">Postnr måste vara siffror!</p>";
            }
        }
        ?>
    </div>
</body>
</html>