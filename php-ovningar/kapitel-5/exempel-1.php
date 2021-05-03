<?php
/**
* PHP version 7
* @category   
* @author     Karim Ryde <karye.webb@gmail.com>
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
        // 1. Öppna filen för läsning
        $handtag = fopen("style.css", "r");

        // Läs in 10 tecken
        $text = fread($handtag, 10);
        echo "<p>$text</p>";

        // Stäng filen
        fclose($handtag);

        // Skriva till en fil
        $handtag = fopen("mandag.txt", "w");

        // Skriv en rad, \n = radslut
        fwrite($handtag, "Idag börjar med filhantering...\n");
        fwrite($handtag, "Vi kollar på fopen() och fread()...\n");
        echo "<p>Har skrivit 2 rader till filen mandag.txt</p>";

        // Stäng filen
        fclose($handtag);

        // 2. Läsa in hela textfilen på en gång med file()
        // Alla rader i en array
        $rader = file("mandag.txt");
        
        // Skriv ut rader en-och-en
        foreach ($rader as $rad) {
            echo "<p>$rad</p>";
        }

        // 3. Läsa in hela textfilen i en sträng
        $allText = file_get_contents("mandag.txt");
        echo "<p>$allText</p>";

        // 4. Läsa in en fil från nätet
        $hemsida = file_get_contents("https://vecka.nu/");
        //echo "<p>$hemsida</p>";

        // Spara ned hemsidan i en fil
        $handtag = fopen("veckanu.html", "w");
        fwrite($handtag, $hemsida);
        fclose($handtag);
        ?>
    </div>
</body>
</html>