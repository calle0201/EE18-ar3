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
           
            
            <label for="mail">mail</label>
            <input class="form-control" name="mail" id="mail" type="text">
         <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
       
    <?php

    $mail = filter_input(INPUT_POST,"mail", FILTER_SANITIZE_STRING);


    if ($mail) {

$lenMail = strlen($mail);



if (strpos($mail,"@")>5  ) {
    $dotPos = strpos($mail,".");
    $förnamn = substr($mail,0,$dotPos);
    echo "<p>$förnamn</p>";
    $adressTyp = strpos($mail,"@") + 1;
    $dotPos = strpos($mail,".",$dotPos + 1 );
    echo "<p>$dotPos</p>";
    $adressTyp = substr($mail,$adressTyp ,$dotPos - $adressTyp);
    echo "<p>$adressTyp</p>";
  } else {
    
    $adressTyp = strpos($mail,"@");
    echo "<p>$adressTyp</p>";
    $förnamn = substr($mail,0,$adressTyp);
    $adressTyp = strpos($mail,"@") + 1;
    echo "<p>$förnamn</p>";
    $dotPos = strpos($mail,".") ;
    echo "<p>$dotPos</p>";
    $adressTyp = substr($mail,$adressTyp ,$dotPos - $adressTyp);
    echo "<p>$adressTyp</p>";
  }
    }
    
    ?>
     </div>
</body>
</html>