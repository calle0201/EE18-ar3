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
    <title></title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="#" method="post">
            <label for="text">skriv en fil från servern som uppgift5-1.php</label>
           <textarea name="text" id="text" cols="30" rows="10"></textarea>


            <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <?php
        if (isset($_POST["text"]  )) {
            $text = $_POST["text"];
         
           $filIneholl = file($text);
            foreach ($filIneholl as $key => $rad) {
                echo "<p> $rad</p>";
            }
        }
        ?>
    </div>
</body>
</html>