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
        <h1>tal mellan tal1 och tal2</h1>
        <form action="#" method="post">
            <label for="name">tal1</label>
            <input class="form-control" name="tal1" id="name" type="number">
            <br>
            <label for="name">tal2</label>
            <input class="form-control" name="tal2" id="name" type="number">
            <b <br>
                <button type="submit" class="btn btn-primary">skicka</button>
        </form>
        <?php
            //finns data?
            if (isset($_POST["tal1"], $_POST["tal2"] )) {
     $tal1 = $_POST["tal1"];
    $tal2 = $_POST["tal2"];
    if ($tal1 > $tal2) {
        echo "<p>tal 1 är större än tal2 detta kan det inte vara</p>";
    } else {
        for ($i = $tal1 + 1; $i < $tal2 ; $i++) { 
            $kvadrat = $i * $i;
            echo "<p>$kvadrat</p>";
        }
    }


            }
    ?>
</body>
</html>