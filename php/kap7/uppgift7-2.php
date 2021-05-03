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
            // Matcha "123"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
            if (preg_match("/Det var en gång/", $text) or preg_match("/det var en gång/", $text) ) {
                echo "<p>&#10003; Innehåller 'Det var en gång'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'Det var en gång'.</p>";
            }  
        }
        ?>
    </div>
</body>
</html>