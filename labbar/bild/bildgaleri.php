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
    $repo = "./blider";
     //vad inneålller denna repo
   $resultat = scandir($repo);

  
   echo "<div class='bildgaleri'>";
   foreach ($resultat as $key => $value) {
//ser till att inte ha med . och ..
    if ($value =="." || $value == "..") {
        continue;
    }

    //gör div boxer och stoppar namn och bild i den
    echo "<div class='bild'>";
       echo "<img src='$repo/$resultat[$key]'  >";
      echo "<span>$resultat[$key]</span>";
       echo "</div>";
   }
   echo "</div>";
        ?>
        
    </div>
</body>
</html>