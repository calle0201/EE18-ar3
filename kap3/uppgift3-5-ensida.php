<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lånekalkylator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>lånekalkylator</h1>
        <form action="#" method="post">
        <label for="name">lånebelop</label>
        <input class="form-control" name="lånebelop" id="name" type="number"> 
        <br>
        <label for="name">ränta</label>
        <input class="form-control" name="ränta" id="name" type="number"> 
        <br>
        <label for="roll" >år</label>
        <input type="radio" name="tid" value="1" checked> 1 år
        <input type="radio" name="tid" value="3"> 3 år
        <input type="radio" name="tid" value="5"> 5 år
<br>
        <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <?php
            //finns data?
            if (isset($_POST["lånebelop"], $_POST["ränta"], $_POST["tid"] )) {
     $belop = $_POST["lånebelop"];
    $renta = $_POST["ränta"] / 100 + 1;
    $år = $_POST["tid"];

    switch ($år) {
        case '3':
           $sammanlagt = $belop * $renta * $renta * $renta - $belop ;
           echo "<p>total ränta $sammanlagt</p>";
            break;
        case '5':
            $sammanlagt = $belop * $renta * $renta * $renta * $renta * $renta - $belop ;
            echo "<p> total ränta $sammanlagt</p>";
            break;
        
        default:
        $sammanlagt = $belop * $renta - $belop ;
        echo "<p>total ränta $sammanlagt</p>";
            break;
    }
            }

    
    ?>
    </div>
</body>
</html>