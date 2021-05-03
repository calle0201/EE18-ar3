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
        <h1>namnordning</h1>
        <form action="#" method="post">
            <label for="name">name1</label>
            <input class="form-control" name="name[]" id="name" type="text">
            <br>
            <label for="name">name2</label>
            <input class="form-control" name="name[]" id="name" type="text">
            <br>
          
            <label for="name">name3</label>
            <input class="form-control" name="name[]" id="name" type="text">
            <br>
            <label for="name">name4</label>
            <input class="form-control" name="name[]" id="name" type="text">
            <br>
            <label for="name">name5</label>
            <input class="form-control" name="name[]" id="name" type="text">
            <br>
          
      
            <br>
            <button type="submit" class="btn btn-primary">skicka</button>



        </form>
        <div>
            <?php
                if (isset($_POST["name"]  )) {
                    $names = $_POST["name"];
                    sort($names);
                    foreach ($names as $key => $manynames) {
                        echo "<p>$manynames</p>";
                    }

                    




}
            ?>
    </body>
</html>