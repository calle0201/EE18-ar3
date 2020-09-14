<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        $name = $_POST["name"];
        $epost = $_POST["epost"];
        $mobile = $_POST["mobil"];
        $kontakt = $_POST["roll"];

        echo "<p> Namn: $name <br> epostadress: $epost <br> </p>";
        if ($kontakt == "epost") {
            echo "<p>du vill bli kontaktad igenom: $epost</p>";
        } else {
            echo "<p>du vill bli kontaktad igenom: $mobile</p>";
        }
        ?>
    </div>
</body>
</html>