<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skriv ut csv-fil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2
    .css">
</head>
<body>
    <div class="kontainer">
        <h1>NTI lunchrestauranger</h1>
        <form class="bg-light" action="#" method="POST">
            <label>Ange filnamn</label>
            <input class="form-control" type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Läs in</button>
        </form>
        <?php
        // Finns data?
        if (isset($_POST["filnamn"]  )) {
            $filnamn = $_POST["filnamn"];
            // Läs in texten från formuläret
            $rader = file($filnamn);    
            if (is_readable($filnamn)) {
                echo "<table class=\"table table-striped\">";
                echo "<tr><th>Namn</th><th>Gata</th><th>Postnr</th><th>Postort</th></tr>";
                
                foreach ($rader as $key => $del) {
                   $bla = explode(', ',$del);
                    echo "<tr><td>$bla[0]</td><td>$bla[1]</td><td>$bla[2]</td><td>$bla[3]</td></tr>";
                }
              
                echo "</table>";
            } else {
                echo "<div class=\"alert alert-dark\" role=\"alert\">denna fil går inte att läsa </div>";
            }
          
        }
        $rad = count($rader);
        echo "<p>det är $rad rader</p>";
        ?>
    </div>
</body>
</html>