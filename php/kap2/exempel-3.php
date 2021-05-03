<?php
/*
* Datum på svenska
*
* PHP version 7
* @category   Lånekalkylator
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
        $datum = date("l y F");
        echo "<p>Dagens datum är $datum</p>";

        //byta till svenska
        setlocale(LC_ALL, "sv_SE.utf8");
        //översätt till svenska
        $svensktDatum = strftime("%A %y %B");
        //dagens datum på svenska
echo "<p>Dagens datum på svenska är $svensktDatum</p>";



        ?>
    </div>
</body>
</html>