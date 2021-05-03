<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $belop = $_POST["lånebelop"];
    $renta = $_POST["ränta"] / 100 + 1;
    $år = $_POST["tid"];

    switch ($år) {
        case '3':
           $sammanlagt = $belop * $renta * $renta * $renta - $belop ;
           echo "<p>total ränta $sammanlagt</p>";
            break;
        case '5':
            $sammanlagt = $belop * $renta * $renta * $renta * $renta * $renta - $belop ;
            echo "<p> total ränta $sammanlagt</p>";
            break;
        
        default:
        $sammanlagt = $belop * $renta - $belop ;
        echo "<p>total ränta $sammanlagt</p>";
            break;
    }
    ?>
</body>
</html>