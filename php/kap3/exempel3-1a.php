<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>FORMULÄR</h1>
        <form action="exempel3-1b.php" method="POST">
        <label for="namn">användarnamn</label>
        <input class="form-control" name="name" id="namn" type="text">
        <label for="pass">lösen</label>
        <input name="pass" class="form-control" id="pass" type="password">
        <button type="submit" class="btn btn-primary">skicka</button>
        </form>
        <?php
        //ta emot data som skickas
        $fel = $_GET["fel"];
        if ($fel = "1") {
           echo "<div class=\"alert alert-success\" role=\"alert\">
           lösen eller användernamn är fel
         </div>";
        }
        ?>
    </div>
</body>
</html>