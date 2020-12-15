<?php
/*
* PHP version 7
* @category   
* @author     Carl Edenflod <Carl.edenflodhoglund@elev.ga.ntig.se>
* @license    PHP CC
*/

$user = "calle";
$db = "labbar";
$host = "localhost";
$pass = "vABogbya48SpaQoP";

//log in to the sql SERVER

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    echo "<p>you could connect</p>";
}


?>