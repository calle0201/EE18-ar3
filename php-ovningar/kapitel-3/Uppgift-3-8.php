<?php
/**
 * På det nationella provet i Matematik 1 våren 2018 så fanns följande poänggränser för olika provbetyg.
 * Skapa ett skript som frågar användaren hur många poäng hen fick på detta prov. Skriptet ska säga vilket provbetyg användaren fick.
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
    <title>Nationella provet i Matematik 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Nationella provet i Matematik 1</h1>
        <form action="#" method="POST">
            <label for="namn">Ange provpoäng</label>
            <input id="namn" class="form-control" type="text" name="poäng" required>
            <button type="submit" class="btn btn-primary">Visa betyg</button>
        </form>

        <?php
        // Finns data? (När man kommer tillbaka till sidan)
        if (isset($_POST["poäng"])) {

            // Ta emot data från formuläret
            $tal1 = $_POST["tal1"];

            // Räkna ut betyg enligt poängen
            if ($poäng < 15) {
                echo "<p>Betyg är F</p>";
            } elseif ($poäng <25) {
                echo "<p>Betyg är E</p>";
            } elseif ($poäng <35) {
                echo "<p>Betyg är D</p>";
            } elseif ($poäng <45) {
                echo "<p>Betyg är C</p>";
            } elseif ($poäng <55) {
                echo "<p>Betyg är B</p>";
            } else {
                echo "<p>Betyg är A</p>";
            }
        }
        ?>
    </div>
</body>
</html>