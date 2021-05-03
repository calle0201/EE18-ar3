<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapitel 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Skriver dagens dag
    /* echo "<p>Idag är det \"";
    echo date("l");
    echo "\".</p>"; */

    // Ett smartare att skriva det
    //echo "<p>Idag är det \"" . date("l") . "\".</p>";

    // Med en variabel
    $idag = date("l"); // "Monday"
    //echo "<p>Idag är det \"" . $idag . "\".</p>";

    // Ännu smartare sätt att skriva
    echo "<p>Idag är det \"$idag\".</p>";

    // Men det här funkar inte!
    echo '<p>Idag är det \"$idag\".</p>';

    // Dagens datum
    // Inte $dDatum säger ingenting
    // Undvik $d
    // Undivk $dat
    $dagensDatum = date("d"); // 14
    $månad = date("F"); // "September"
    // Idag är monday 14 September
    echo "<p>Idag är \"$idag\" $dagensDatum $månad</p>";

    // Hämta ut några server variabler
    echo "<p>$_SERVER[SERVER_ADDR]</p>";


    ?>
</body>
</html>