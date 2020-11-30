<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style2.css">
</head>
<body>
<div class="kontainer">
    <?php
    $tsvfil = "../restauranger.csv";
    if (is_readable($tsvfil) == true) {
       $file = fopen($tsvfil, "r");
       echo "<table class=\"table table-striped\">";
       echo "<tr><th>Namn</th><th>Gata</th><th>Postnr</th><th>Postort</th></tr>";
while (! feof($file)) {
    $rows = fgetcsv($file);
    echo "<tr><td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td></tr>";
}
echo "</table>";
    } else {
        echo "<p>something went wrong</p>";
    }
    ?>
    </div>
</body>
</html>