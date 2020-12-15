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
        <h1>Interaktiv berättelse</h1>
        <?php
        $chatt = "";
        $fråga = 0;

        // Finns data?
        if (isset($_POST["input"], $_POST["chatt"], $_POST["fråga"])) {

            // Ta emot data från formuläret
            $input = $_POST["input"];
            $chatt = $_POST["chatt"];
            $fråga = $_POST["fråga"];

            $input = strtolower($input);
            // Frågor och svar
            $chatt .= "Du> $input\n";

            switch ($fråga) {
                // Första fråga och svaren
                case 1:
                    if ($input == "ja") {
                        $chatt .= "Bott> vad ska du göra? spela eller bygga\n";
                        $fråga = 2;
                    } elseif ($input == "nej") {
                        $chatt .= "Bott> varför inte vet ej eller inget att göra?\n";
                        $fråga = 2;
                    } 
                    break;

                    // Andra frågan och svaren
                case 2:
                    if ($input == "spela") {
                        $chatt .= "Bott> vad ska du spela cs, WOWs eller genshin\n";
                        $fråga = 3;
                    } elseif ($input == "bygga") {
                        $chatt .= "Bott> bygga båt eller flygplan?\n";
                            $fråga = 4;
                    } elseif ($input == "vet ej") {
                        $chatt .= "Bott> okej\n";
                    } elseif ($input == "inget att göra") {
                       $chatt .= "Bott> så kan det vara\n";
                    }
                    break;

                case 3:
                    switch ($input) {
                        case 'cs':
                           $chatt .= "bott> lycka till";
                            break;
                        case 'wows':
                           $chatt .= "bott> action stations";
                            break;
                        case 'genshin':
                           $chatt .= "bott> emergency food";
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                    break;
                case '4':
                    switch ($input) {
                        case 'båt':
                            $chatt .= "lycka till med båten";
                            break;
                        case 'flygplan':
                            $chatt .= "lycka till med flygplanet";
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            $fråga = 1;
            $chatt = "ska du göra något idag? ja eller nej\n";
        }
        ?>        
        <form action="#" method="POST">
            <textarea name="chatt" id="" cols="30" rows="20" readonly><?php echo $chatt; ?></textarea>
            <input id="input" class="form-control" type="text" name="input">
            <input type="hidden" name="fråga" value="<?php echo $fråga; ?>">
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
    </div>
</body>
</html>