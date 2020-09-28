<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //array med länder
    $länder = ["svergie", "norge", "finland"];
   foreach ($länder as $land) {
       echo "<p>$land</p>";
   }

   //associativ array
$elever = [];
$elever["Vikotr"] = "guitar";
$elever["Lukas"] = "Keyboard";
$elever["Olle"] = "Munspel";

//skriv ut array
foreach ($elever as $elev => $instrument ) {
    echo "<p>$elev</p>";
    echo "<p>$instrument</p>";
}
/*
 <table>
  <tr>
    <td>John</td>
    <td>Doe</td>
  </tr>
  <tr>
    <td>Jane</td>
    <td>Doe</td>
  </tr>
</table> 
*/
echo "<table>";
echo "<tr>";
echo "<td>John</td>";
echo "<td>Doe</td>";
echo "</tr>";
echo "</table>";


echo "<table>";
echo"<tr>" ;
echo"<th>name</th>";
echo"<th>instrument</th>";
echo"</tr>";
foreach ($elever as $elev => $instrument) {
    echo "<tr>";
    echo "<td>$elev</td>";
    echo "<td>$instrument</td>";
    echo "</tr>";
}
echo "</table>";

$mening = "Vi och våra partners bearbetar personuppgifter såsom IP-adress, unikt ID och browsingdata. Vissa partner begär inte ditt samtycke till att behandla dina data, utan de litar på sitt legitima affärsintresse. Visa vår lista över partners för att se de syften som de tror att de har ett legitimt intresse för och hur du kan göra invändningar mot det.";


$allaOrd = explode(" ", $mening);

echo "<table>";
foreach ($allaOrd as $numer=> $ord) {
    $numer ++;
    echo "<tr>";
    echo "<td>$numer</td>";
    echo "<td>$ord</td>";
    echo "</tr>";
}
echo "</table>";
    ?>




</body>
</html>