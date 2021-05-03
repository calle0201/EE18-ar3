<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Inloggning</h1>
        <form action="exempel-3-1-b.php" method="POST">
            <label for="anamn">Användarnamn</label>
            <input id="anamn" class="form-control" type="text" name="anamn">
            <label for="lösen">Lösenord</label>
            <input id="lösen" class="form-control" type="password" name="lösen">
            <button type="submit" class="btn btn-primary">Logga in</button>
        </form>
        <?php
        // Ta emot data som skickas
        $fel = $_GET["fel"];
        if ($fel == "1") {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Användarnamn eller lösenord är fel!<br>
                    Vg försök igen.
                  </div>";
        }
        ?>
    </div>
</body>
</html>