<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris api</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Chuck Norris skämt</h1>
        
        <?php
        // Url till tjänsten
        $url = "https://api.chucknorris.io/jokes/random";

        // Gör ett anrop
        $json = file_get_contents($url);

        // Avkoda json
        $jsonData = json_decode($json);

        echo "<p>$jsonData->value</p>";
        echo "<p>Skapad den $jsonData->created_at</p>";
        echo "<img src=\"$jsonData->icon_url\" alt=\"Chuck Norris\">";
        ?>
    </div>
</body>
</html>