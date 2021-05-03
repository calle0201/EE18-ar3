<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens väder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Vädret i Stockholm</h1>
        
        <?php
        // Api-nyckeln
        $key = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Staden
        $stad = "Stockholm";

        // Url till tjänsten
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$key&units=metric";
        echo $url;

        // Gör ett anrop
        $json = file_get_contents($url);

        // Avkoda json
        $jsonData = json_decode($json);

        // Plocka ut koordinaterna
        $coord = $jsonData->coord;
        $lon = $coord->lon;
        $lat = $coord->lat;

        echo "<p>$lat $lon</p>";

        // Plocka ut vädret
        $weather = $jsonData->weather;              // är en array
        $description = $weather[0]->description;
        $icon = $weather[0]->icon;

        echo "<p>Vädret är: $description</p>";
        echo "<img src=\"http://openweathermap.org/img/wn/$icon@2x.png\" alt=\"OWM\">";
        ?>
    </div>
</body>
</html>