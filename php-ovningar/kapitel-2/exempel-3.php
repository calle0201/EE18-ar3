<?php
/**
 * Datum på svenska
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
    <title>Datum på svenska</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Dagens datum
        $datum = date("l y F");
        echo "<p>Dagens datum är $datum</p>";
        // echo "<p>Dagens datum är " . $datum . "</p>";

        // Byta till svenskt språk
        setlocale(LC_ALL, "sv_SE.utf8");
        // Översätt datumet till svenska
        $svensktDatum = strftime("%A %y %B");
        echo "<p>Dagens datum på svenska är $svensktDatum</p>";

        ?>
    </div>
</body>
</html>