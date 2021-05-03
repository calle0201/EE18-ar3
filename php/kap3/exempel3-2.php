<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    /*
    Laugh on Monday, laugh for danger.
    Laugh on Tuesday, kiss a stranger.
    Laugh on Wednesday, laugh for a letter.
    Laugh on Thursday, something better.
    Laugh on Friday, laugh for sorrow.
    Laugh on Saturday, joy tomorrow
    */
    $idag = date("w");
    switch ($idag) {
        case '0':
            # code...
            break;
        case '1':
           echo "<p>Laugh on Monday, laugh for danger.</p>";
            break;
        case '2':
           echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
            break;
        case '3':
           echo "<p>   Laugh on Wednesday, laugh for a letter.</p>";
            break;
        case '4':
            echo "<p> Laugh on Thursday, something better.</p>";
            break;
        case '5':
           echo "<p>   Laugh on Friday, laugh for sorrow.</p>";
            break;
        case '6':
            echo "<p>   Laugh on Saturday, joy tomorrow.</p>";
            break;
            defualt:
            echo "<p>no day selected</p>";
        break;
    };

    for ($i=0; $i < 10; $i++) { 
       echo "<p>$i</p>";
    }
    ?>
</body>
</html>