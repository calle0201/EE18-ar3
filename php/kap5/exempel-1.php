<?php
/*
* PHP version 7
* @category   
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filhantering</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        //öppna fil för läsa
        $handtag = fopen("style.css", "r");

        //läs text
        $text = fread($handtag, 11);
        echo "<p>$text</p>";
        //stäng fil
        
        fclose($handtag);
        //skriv till fil
        $handtag = fopen("text.txt", "w");
        //skriv
        fwrite($handtag,"idag har vi fil hantering \n");
        fwrite($handtag,"vi kollar på fopen() och fread() \n");

        //stäng fil
        fclose($handtag);

        //läs in HELA text filen
        //rader i en array
        $rader = file("text.txt");

        //skriv ut varje rad i rader
        foreach ($rader as $num => $rad) {
            echo "<p>$num $rad</p>";
        }

//3. läsa in hela textfilen i en sträng
$alllText = file_get_contents("text.txt");


        ?>
    </div>
</body>
</html>