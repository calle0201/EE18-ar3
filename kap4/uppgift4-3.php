<?php
/*
Skriv en webbapp där användaren matar in ett tal 1-9 och sedan returnerar det svenska namnet för talet (ett, två, tre osv). Om talet är större än 9 så returnerar du i stället talet som vanligt (tex. 11). 

* PHP version 7
* @category   Lånekalkylator
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>byt 1 till ett</h1>
        <form action="#" method="post">
            <label for="name">tal</label>
            <input class="form-control" name="tal" id="name" type="number">


            <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <div>
            <?php
                if (isset($_POST["tal"]  )) {
                    $tal = $_POST["tal"];
                    $talIBokstav = [
                        "noll",
                        "ett",
                        "två",
                        "tre",
                        "fyra",
                        "fem",
                        "sex",
                        "sju", 
                        "åtta",
                        "nio"
                    ];
                        switch ($tal) {
                            case $tal < 10 and $tal > -1 :
                             echo "<p>$talIBokstav[$tal]</p>";
                           break;
                       
                       default:
                          echo "<p>$tal</p>";
                           break;
                   }
                 
                    




}
            ?>
</body>
</html>