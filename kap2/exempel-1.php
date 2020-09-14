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
   
   $Datum = date("l d M");
    $idag = date("l");
    //echo "<p> idag är det: " . $idag . ". </p>";
    echo "<p> idag är  $Datum. </p>";
//datum
echo "<p>$_SERVER[SERVER_ADDR]</p>";
    ?>
</body>
</html>