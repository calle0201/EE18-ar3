<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <h1>skanna katalog</h1>
        <?php
    $repo = "./bild";
   $resultat = scandir($repo);

   //vad inneålller denna repo
   foreach ($resultat as $value) {

    if ($value =="." || $value == "..") {
        continue;
    }

       echo "<p>$value</p>";
   }
        ?>
        
    </div>
</body>
</html>