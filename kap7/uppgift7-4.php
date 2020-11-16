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
            // Matcha "123"
            // Regex = regular expression = reguljära uttryck
            // På samma sätt som strstr()
           
         
            if (preg_match_all("/[0-9a-zåäö\-@\.]+/", $text)) {
                echo "<p>&#10003; Innehåller 'too' eller 'to'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'too' eller 'to'.</p>";
            } 
            if (preg_match_all("/^a-zåäö]+/", $text)) {
                echo "<p>&#10003; Innehåller 'too' eller 'to'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'too' eller 'to'.</p>";
            } 
            if (preg_match_all("/.{6,200}/", $text)) {
                echo "<p>&#10003; Innehåller 'too' eller 'to'.</p>";
            } else {
                echo "<p>&#10005; Innehåller INTE 'too' eller 'to'.</p>";
            } 


        }
        ?>
    </div>
</body>
</html>