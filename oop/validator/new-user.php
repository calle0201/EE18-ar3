<?php
// Användarnamnet måste vara 6-12 tecken långt, stora & små bokstäver samt siffror
$resultat = "";
function validateUsername($data) 
{
    global $resultat;
    if (preg_match("/[a-zA-Z0-9]{6,12}/", $data)) {
        $resultat = "<p>&#10003; Innehåller a-z, A_Z, 0-9</p>";
    } else {
        $resultat = "<p>&#10005; Innehåller INTE a-z, A_Z, 0-9.</p>";
    }
}
function validatePassword($data) 
{

}
function validateEmail($data) 
{

}

// Ta emot data som skickas
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);

// Om data finns...
if ($username && $password && $email) {
    
    // Kontrollera att username följer reglerna
    validateUsername($username, $resultat);

    // Kontrollera att lösenordet följer reglerna
    validatePassword($password);

    // Kontrollera att epost följer reglerna
    validateEmail($email);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Create New User</h1>
        <form action="#" method="post">
            <label>Username <input type="text" name="username"></label>
            <?php
            echo $resultat;
            ?>
            <label>Password <input type="password" name="password"></label>
            <label>Email <input type="email" name="email"></label>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>