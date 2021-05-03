<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ladda upp filer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        if (isset($_POST["submit"])) {
            
            // Ta emot filen
            $file = $_FILES["filen"];

            //var_dump($file);

            // Filens information
            $fileName = $file["name"];
            $fileSize = $file["size"];
            $fileType = $file["type"];
            $fileTempName = $file["tmp_name"];
            $error = $file["error"];

            // Tillåtna filtyper
            $allowed = ["jpeg", "png", "gif"];

            // Bilden filtyp
            $delar = explode("/", $fileType);
            $imageType = $delar[1];

            // Är filen tillåten?
            if (in_array($imageType, $allowed)) {
                
                // Blev det något felmeddelande
                if ($error === 0) {
                    
                    // Är filen för stor?
                    if ($fileSize <= 200000) {
                        
                        // Skapa ett unikt filnamn
                        $fileNameNew = uniqid("", true) . ".$imageType";

                        // Var filens skall hamna
                        $fileDestination = "./uppladdat/$fileNameNew";

                        // Äntligen! Flytta filen in i mappen
                        move_uploaded_file($fileTempName, $fileDestination);

                        echo "<p>Filen är uppladdad!</p>";
                    } else {
                        echo "<p>Filen är för stor!</p>";
                    }
                } else {
                    echo "<p>Något blev fel!</p>";
                }
            } else {
                echo "<p>Du får bara ladda upp jpg, png eller gif!</p>";
            }
        }
        ?>
    </div>
</body>
</html>