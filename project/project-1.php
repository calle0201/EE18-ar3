<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interaktiv berättelse</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">

    <?php
        // Finns data?
        if (isset($_POST["txt"], $_POST["chatt"])) {
          
            // Ta emot data från formuläret
            $txt = $_POST["txt"];
            $txtCapitalized = strtolower($txt);
           $chatt .= 
"$txtCapitalized";
$fråga = 1;
switch ($fråga) {
    case '1':
        switch ($txtCapitalized) {
            case strpos($txtCapitalized, 'ja') !== false:
               $chatt .= ' 
vad ska du göra?';
        $fråga = 2;
                break;
            case strpos($txtCapitalized, 'nej') !== false:
                $chatt .= '
varför inte?';
                $fråga = 3;
                break;
            case strpos($txtCapitalized, 'kanske') !== false:
                $chatt .= "
okej";
                break;

            default:
          $chatt .= "
kan du säga det igen?";   
                break;
        }
       
        break;
    case '2':
       switch ($txtCapitalized) {
        case strpos($txtCapitalized,"spela") !== false:
         
            $chatt .=" 
vad ska du spela?";
$fråga = 4;
       break;
           case '3':
            
            
                break;
           default:
               # code...
               break;
       }
        break;
        $varv = 3; 
    case '3':
        # code...
        break;
    
    default:
        # code...
        break;
}



        } else {
            $chatt = "ska du göra något idag?";
            
        }
        ?>
        <h1>Interaktiv berättelse</h1>
        <form action="#" method="POST">
            <textarea name="chatt"  id="" cols="30" rows="15" readonly><?php echo "$chatt";?>
            </textarea>
            <input id="text" class="form-control" type="text" name="txt">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

       
    </div>
</body>
</html>