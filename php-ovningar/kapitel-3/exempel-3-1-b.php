<?php
/**
 * Enkel inloggning
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
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Ta emot data från formuläret
        $anamn = $_POST["anamn"];
        $lösen = $_POST["lösen"];

        // Kontrollera inloggningsuppgifter
        // Skriv ut svar
        if ($anamn == "karim" && $lösen == "mirak") {
            echo "<div class=\"alert alert-success\" role=\"alert\">
                    Du är inloggad!
                  </div>";
        } else {
            header("Location:exempel-3-1-a.php?fel=1");
        }
        ?>
    </div>
</body>
</html>