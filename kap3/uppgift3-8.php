<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>betyg</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>betyg</h1>
        <form action="#" method="post">
        <label for="name">antal rätt svar</label>
        <input class="form-control" name="svar" id="name" type="number"> 
        <br>
        
<br>
        <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <?php
            //finns data?
            if (isset($_POST["svar"] )) {
     $svar = $_POST["svar"];
 
     /*
     A 55
     B 45
     C 35
     D 25
     E 15 
     */
   if ($svar >= 15 and $svar <= 24) {
    echo "<p>du fick E</p>";
   } elseif ($svar >= 24 and $svar <= 34) {
       echo "<p>du fick D</p>";
   } elseif ($svar >= 34 and $svar <= 44) {
       echo "<p>du fick C</p>";
   } elseif ($svar >= 44 and $svar <= 54) {
       echo "<p>Du fick B</p>";
   } elseif ($svar >= 54 and $svar <= 100) {
       echo "<p>Du fick A</p>";
   } else {
       echo "<p>du har antingen F eller skrev för många poäng</p>";
   }

   
            }

    ?>
    </div>
</body>
</html>