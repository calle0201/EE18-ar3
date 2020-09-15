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
    $name = $_POST["name"];
    $pass = $_POST["pass"];

if ($pass == "4567" and $name == "calle") {
    echo "<p>du är inloggad som $name</p>";
} else {
    header("location:exempel3-1a.php?fel=1");
}




    ?>
</body>
</html>