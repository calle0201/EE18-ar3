<?php
/*
* en enkel blogg som använder en databas
* 
* PHP version 7
* @category   webbaplikation med databas
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/
include "./resurser/conn.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sök</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
        <li class="nav-item"><a class="nav-link " href="./admin/skriva.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="./sok.php active">sök</a></li>
    </ul>
</nav>
<form action="#" method="POST">
    <label>sökterm <input type="text" name="sökterm" ></label>
<button>sök</button>
</form>
<?php
$sökterm = filter_input(INPUT_POST,"sökterm",FILTER_SANITIZE_STRING);
if ($sökterm) {

$sql = "SELECT * FROM blogg WHERE postText OR header LIKE '%$sökterm%'";

$result = $conn->query($sql);

    if (!$result) {
        die("something went wrong" . $conn->error);
    } else {
        echo "<p>Inlägget har registerats " . $result->num_rows . " inlägg</p>";
    }
}
?>
</div>
</body>
</html>