<?php
error_reporting(E_ALL);

$host = "localhost";
$db = "calle";
$user = "calle";
$pass = "vABogbya48SpaQoP";


//steg 1
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("kunde inte ansluta: " . $conn->error);
} else {
    echo "<p>gick bra att ansluta</p>";
}
?>