<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("https://astro.elle.se");

        // Sök början på texten
        $start = strpos($sidan, "c-post_content__wrapper") ;
        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }
        
        // Sök slutet på texten
        $slut = strpos($sidan, "c-post_tag", $start);
       //
        
        // Plocka ut ungefär delen med horoskoptexten
        $horoskopText = substr($sidan, $start +26, $slut - $start );
       echo "<p>$horoskopText</p>";

        // första delen före annonsen
        $start = strpos($horoskopText, "Fiskarna 19/2-20/3", );
        echo "<p>$start </p>";
         $slut = strpos($horoskopText, "</div>", 100 );
         
        $del1 = substr($horoskopText, $start, $slut );
        echo "$del1</div>\n"; 
         
        ?>
    </div>
</body>
</html>