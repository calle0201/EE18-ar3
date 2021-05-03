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
                <input type="text" name="text" required>
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
            // Matcha "gatan"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
            if (preg_match("/gatan/", $text)) {
                echo "<p>&#10003; Innehåller 'gatan'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'gatan'.</p>";
            }  

            // Matcha bokstav i alfabetet
            if (preg_match("/[a-zåäö]/", $text)) {
                echo "<p>&#10003; Innehåller en bokstav ur alfabetet.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en bokstav ur alfabetet.</p>";
            }  

            // Matcha siffror
            if (preg_match("/[0-9]/", $text)) {
                echo "<p>&#10003; Innehåller en siffra.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE en siffra.</p>";
            }

            // Negativ matchning
            if (preg_match("/[^_]/", $text)) {
                echo "<p>&#10003; Innehåller ej tecknet '_'.</p>";
            } else {
                echo "<p>&#10005; Innehåller tecknet '_'.</p>";
            }

            // Matcha stora & små bokstäver (case insensitive)
            if (preg_match("/[a-zåäö]/i", $text)) {
                echo "<p>&#10003; Innehåller små eller stora bokstäver.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej små eller stora bokstäver.</p>";
            }

            // Sök efter 'a', 'aa', 'aaa' dvs en eller flera
            if (preg_match("/a+/i", $text)) {
                echo "<p>&#10003; Innehåller en eller flera 'a' i följd.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej en eller flera 'a' i följd.</p>";
            }

            // Sök efter noll eller flera 'a'
            if (preg_match("/a*/i", $text)) {
                echo "<p>&#10003; Innehåller noll eller flera 'a'.</p>";
            } else {
                echo "<p>&#10005; Innehåller ej noll eller flera 'a' i följd.</p>";
            }

            // Matcha ett antal, tex en ip-adress som 192.168.0.10
            if (preg_match("/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}/", $text)) {
                echo "<p>&#10003; matchar en ip-adress.</p>";
            } else {
                echo "<p>&#10005; matchar ej en ip-adress.</p>";
            }

            // Matcha orden SAB eller SAAB
            if (preg_match("/SA{1,2}B/", $text)) {
                echo "<p>&#10003; matchar orden SAB eller SAAB.</p>";
            } else {
                echo "<p>&#10005; matchar ej orden SAB eller SAAB.</p>";
            }

            // Matcha orden SAB eller SAAB
            if (preg_match("/SAB|SAAB/", $text)) {
                echo "<p>&#10003; matchar orden SAB eller SAAB.</p>";
            } else {
                echo "<p>&#10005; matchar ej orden SAB eller SAAB.</p>";
            }

            // Matcha orden Obs eller OBS eller obs
            if (preg_match("/Obs|OBS|obs/", $text)) {
                echo "<p>&#10003; matchar orden SAB eller SAAB.</p>";
            } else {
                echo "<p>&#10005; matchar ej orden SAB eller SAAB.</p>";
            }

            // Matcha orden Obs oavsett små eller stora bokstäver
            if (preg_match("/obs/i", $text)) {
                echo "<p>&#10003; matchar.</p>";
            } else {
                echo "<p>&#10005; matchar ej.</p>";
            }

            // Matcha gatuadress tex Sveavägen 12, Sveaväg. 12
            if (preg_match("/Sveavägen 12|Sveaväg\. 12/", $text)) {
                echo "<p>&#10003; matchar.</p>";
            } else {
                echo "<p>&#10005; matchar ej.</p>";
            }
            // Gunnars lösning
            if (preg_match("/Sveaväg(en 12|\. 12)/", $text)) {
                echo "<p>&#10003; matchar.</p>";
            } else {
                echo "<p>&#10005; matchar ej.</p>";
            }
        }
        ?>
    </div>
</body>
</html>