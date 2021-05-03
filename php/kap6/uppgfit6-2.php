<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>namnordning</h1>
        <form action="#" method="post">
            <label for="name">Name</label>
            <input class="form-control" name="name" id="name" type="text">
            
            <label for="adress">Adress</label>
            <input class="form-control" name="adress" id="adress" type="text">
           
          
            <label for="postNr">postnr</label>
            <input class="form-control" name="postNr" id="postNr" type="text">
         
            <label for="postOrt">postort</label>
            <input class="form-control" name="postOrt" id="postOrt" type="text">
            <label for="mail">mail</label>
            <input class="form-control" name="mail" id="mail" type="text">
         <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
       
    <?php
    $name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
    $adress = filter_input(INPUT_POST,"adress", FILTER_SANITIZE_STRING);
    $postNr = filter_input(INPUT_POST,"postNr", FILTER_SANITIZE_STRING);
    $postOrt = filter_input(INPUT_POST,"postOrt", FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST,"mail", FILTER_SANITIZE_STRING);

    if ($name and $adress and $postNr and $postNr and $mail) {
$lenName = strlen($name );
$lenAdress = strlen($adress);
$lenPostNr = strlen($postNr);
$lenPostOrt = strlen($postOrt);
$lenmail = strlen($mail);

if ($lenName and $lenAdress and $postOrt < 3) {
    echo "<p>någon har mindre än 3 bokstäver/sifror</p>";
} else {
    
}

if ($lenPostNr <5) {
    echo "<p>ditt post nr är felaktigt</p>";
} else {
    # code...
}

if (is_numeric($postNr) == true) {

} else {
    echo "<p>din postNr innehåller bokstav</p>";
}

switch ($mail) {
    case !strpos($mail, "@"):
       echo "<p>din mail har inget @ tecken</p>";
        break;
    case !strpos($mail, "."):
        echo "<p>din mail har ingen punkt</p>";
        break;
    
    default:
        echo "<p>din mail är vaild</p>";
        break;
}
 if ($lenmail < 5) {
    echo "<p>din mail är ej giltig</p>";
 }     
    } else {
        echo "<p>något har inget i sig</p>";
    }
    ?>
     </div>
</body>
</html>