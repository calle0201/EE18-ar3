<?php
/*
 * Skapa en PHP-webbapplikation som räknar ut din lön efter skatt.
 * Du skall kunna mata in namn, bruttolönen och skattesatsen (tex 30 för 30%).
 * Beräkning: lön efter skatt heter nettolön = bruttolön * (100 - skattesatsen) / 100.
 *
 * PHP version 7
 * @category   Skatteberäkning
 * @author     Carl edenflod
 * @license    PHP CC
 */
; ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skatteberäkning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Lön efter skatt</h1>
        <form action="#" method="post">
            <label for="name">Namn</label>
            <input class="form-control" name="name" id="name" type="text">
            <br>
            <label for="name">bruttolön</label>
            <input class="form-control" name="lön" id="lön" type="number">
            <br>
            <label for="name">skattesats</label>
            <input class="form-control" name="skatt" id="skatt" type="number">
            <br>
            <button type="submit" class="btn btn-primary">skicka in</button>
        </form>
    <?php
    if (isset($_POST["name"], $_POST["lön"], $_POST["skatt"]  )) {
        //för in info in i PHP
          $name = $_POST["name"];
          $lön = $_POST["lön"];
          $skatt = $_POST["skatt"];
          
        switch ($lön) {
            //switch för att kolla om lön är rätt
            case $lön <= 45000 and $lön > 9999:
            //switch för att kolla skatt
                switch ($skatt ) {
                    //är skatt mellan 10 och 45
                    case $skatt <= 45 and $skatt >= 10:
                        $netto = $lön * (100 - $skatt)/100;
                        echo "<h1>lönebesked</h1>";
                        echo "<p>$name:s lön är $netto kr efter skatt</p>";
                        echo "<p>beräkning baserad på bruttolön på $lön kr och skattesats på $skatt%</p>";
                        break;
                    //om skatt inte är rätt
                    default:
                      echo "<p class=\"varning\">skatte satsen måste vara imellan 10 och 45</p>";
                        break;
                }
                break;
         //om lön inte är rätt
            default:
            echo "<p class=\"varning\">bruttolön måste ligga imellan 10k och 45k</p>";
                break;
        }

    }
    ?>
    </div>
</body>
</html>