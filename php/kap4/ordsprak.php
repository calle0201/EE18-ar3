<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="ordsprak.css">
</head>
<body>
<?php
    // Skapa en array med tio ordspråk
    $ordsprak = [
    "Alla goda ting är tre.",
    "Borta bra, men hemma bäst",
    "Bra karl reder sig själv",
    "Bättre stämma i bäcken än i ån.",
    "Den som väntar på nåt gott väntar aldrig för länge.",
    "De synder man mest ångrar på gamla dar är de man inte begått",
    "Den som sig i leken ger, den får leken tåla.","Ett mjukt svar stillar vreden",
    "Ensam är stark.",
    "En svala gör ingen sommar."
];

$tagna = [];

for ($i=0; $i < 6; $i++) { 
    $index = rand(0, 9);
    if (!in_array($index, $tagna)) {
        echo "<p>$ordsprak[$index]</p>";
    
        $tagna[] = $index;
    } else {
       $i--;
    }
}


   
?>
</body>
</html>