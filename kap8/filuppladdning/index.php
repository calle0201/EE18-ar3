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
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="">ange filnamn
        <input type="file" name="file">
        </label>
        <button type="submit" name="submit">submit</button>
        
    </form>
    </div>
</body>
</html>