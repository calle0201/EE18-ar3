<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hitta match med regex</h1>
        <form action="#" method="POST">
            <label>Ange text
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </label>
            <button>Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);

        if ($text) {
            echo "<h3>Inmattat</h3>";
            echo "<p>Text: <em>'$text'</em></p>";

            echo "<h3>Resultat</h3>";
            // Gör ett formulär där användaren ska fylla i en text. 
            //Konstruera ett reguljärt uttryck som ska kontrollera adresser som //ska föras in i en databas. Adresserna får endast bestå av små och //stora bokstäver, punkt, siffror och mellanslag. Använd
            if (preg_match_all("/[a-zåäö0-9 .]+/i", $text, $träffar)  ) {
                echo "<p>&#10003; Innehåller 'något fel'.</p>";
              echo  "<ul>";
                foreach ($träffar[0] as $key => $value) {
                    $key ++;
                    echo " <li>$key  $value</li>";
                }
                echo  "</sul>";
            } else {
                echo "<p>&#10005; Innehåller INTE det var något fel.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>