<?php
/*
* PHP version 7
* @category   
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
    <title>läsa blogg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   <div class="container">
   <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
        <li class="nav-item"><a class="nav-link " href="./skriva.php">Skriva</a></li>
        <li class="nav-item"><a class="nav-link" href="./sok.php">sök</a></li>
    </ul>
</nav>
<?php
$sql = "SELECT * FROM blogg";
$result = $conn->query($sql);


while ($rad = $result->fetch_assoc()) {
    echo "<div class =\"post\">";
       echo "<p>$rad[header]</p>";
       echo "<p>$rad[PostText]</p>";
       echo "</div>";
   

}
?>
   </div> 
</body>
</html>