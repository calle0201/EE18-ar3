<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMS RESULT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $tal1 = $_POST["tal1"];
    $tal2 = $_POST["tal2"];

$summa = $tal1 + $tal2;

echo "summan av $tal1 + $tal2 är $summa"

    ?>
</body>
</html>