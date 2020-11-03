<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>spara inlagg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css">
    <link rel="stylesheet" href="./blogg.css">
</head>
<body>
<main>
    <div class="kontainer">
    <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="blogg.php">Alla inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="spara.php">Skriva inlägg</a></li>
                </ul>
            </nav>
        </header>
    <form action="#" method="post">
        <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
        <button class="btn btn-primary">Spara inlägg</button>
    </form>
    <?php
   /*  if (isset($_POST['inlagg'])) {
       
        $texten = $_POST["inlagg"];  */

        //rensa från hot
$texten = filter_input(INPUT_POST,"inlagg", FILTER_SANITIZE_STRING);

if ($texten) {

        $filnamn = "blogg.txt";
        $tidpunkt = date('l j F Y h:i:s');
        
        // Är filens skrivbar?
        if (is_writable($filnamn)) {
            # code...
        
    
        // Ersätter /n med <br>
      $ersattMedBr = str_replace("\n", "<br>", $texten);
        //$texten = ($_POST['inlagg'], false);
    
        
        
        
        if (!$handtag = fopen($filnamn, 'a')) {
            echo "kan inte att öppna ($filnamn)";
            exit;
       } else { 
        
       }
       // Skriv text i textfilen
       if (fwrite($handtag, "<p>$tidpunkt<br>$ersattMedBr</p>\n") === FALSE) {
        echo "kan inte skirva till ($filename)";
        exit;
    }
    
        // Stäng anslutningen till textfilen
        fclose($handtag);
    
        echo "<p class=\"alert alert-success\">Inlägget registrerat!</p>";
    } else {
        echo "<p>filen går inte att skriva till</p>";
    }
}  
    ?>
    </div>
</body>
</html>