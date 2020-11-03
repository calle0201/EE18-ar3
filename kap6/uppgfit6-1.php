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
         <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
       
    <?php
    $name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
    $adress = filter_input(INPUT_POST,"adress", FILTER_SANITIZE_STRING);
    $postNr = filter_input(INPUT_POST,"postNr", FILTER_SANITIZE_STRING);
    $postOrt = filter_input(INPUT_POST,"postOrt", FILTER_SANITIZE_STRING);

    if ($name and $adress and $postNr and $postNr) {
$lenName = strlen($name );
$lenAdress = strlen($adress);
$lenPostNr = strlen($postNr);
$lenPostOrt = strlen($postOrt);

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


      
    } else {
        echo "<p>något har inget i sig</p>";
    }
    ?>
     </div>
</body>
</html>