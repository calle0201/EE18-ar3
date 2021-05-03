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
        <?php
        if (isset($_POST["submit"])) {
            $file = $_FILES["file"];
            var_dump($file);

            $fileName = $file["name"];
            $fileSize = $file["size"];
            $fileType = $file["type"];
            $fileTmpName = $file["tmp_name"];
            $fileError = $file["error"];

            //allowed file exentsion

            $allowed = [ "png","gif","jpeg"];
            $fileType = explode("/", $fileType);
            
            if (in_array($fileType[1], $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize <= 1000000) {
                    $fileNameNew = uniqid('', true) . ".$fileType[1]";

                    //vart filen ska hamna
                    $fileDesti = "C:\github/EE18-ar3/labbar/bild/$fileNameNew";
                    move_uploaded_file($fileTmpName, $fileDesti); 
                    } else {
                        echo "<p>your file is to large</p>";
                    }
                } else {
                    echo "<p>something went wrong with your upload</p>";
                }
            } else {
                echo "<p>fil typen är inte tillåten</p>";
            }
        }
        ?>
    </div>
</body>
</html>