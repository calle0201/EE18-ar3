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
            <label for="namn">skriv ditt namn</label>
           <input id="namn" name="namn" type="text">
            <label for="mail">skriv din mail</label>
           <input id="mail" name="mail" type="text">
            <label for="med">skriv ditt medelande</label>
           <input id="med" name="med" type="text">


            <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <?php
        if (isset($_POST["namn"],$_POST["mail"],$_POST["med"]  )) {
            $namn = $_POST["namn"];
            $mail = $_POST["mail"];
            $med = $_POST["med"];
         
            $pointer = fopen("name.txt", "a");
          fwrite($pointer,"$namn med mail: $mail skrev $med \n");
          fclose($pointer);
            }
        
        ?>
    </div>
</body>
</html>