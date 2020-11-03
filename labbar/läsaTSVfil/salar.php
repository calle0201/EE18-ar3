<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skolans salar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Skolans salar</h1>
        <?php
        // Textfilen som skall läsas in
        $tsvfil = "salar.tsv";
        
        // Är filens läsbar?
        if (is_readable($tsvfil) == true) {
                 // Läs in filens alla rader
                 $file = file($tsvfil);
                 echo "<table class=\"table table-striped\">";
                
                 // Loopa igenom alla rader
                 
                 $i = 1;
                $bokad = "ja";
                 foreach ($file as $key => $files) {
                     // Dela upp raden i dess delar
                    $bits = explode("\t", $files);
                        // Skippa första raden som innehåller 'id'
                        if ($i == 1) {
                             // Visa salar i en tabell med kolumnrubriker: nr/namn, bokbar
                            echo "<tr><th>$bits[0]</th><th>$bits[2]</th><th>$bits[3]</th><th>$bits[4]</th></tr>";
                            $i++;
                        } else {
                         // Visa salar i en tabell med kolumnrubriker: nr/namn, bokbar
                         if ($bits[3] == 1) {
                             $bokad = "color: lightgreen; background: lightgreen;
                            }";
                             
                         } else {
                             $bokad = "color: red; background: red;";
                            
                         }
                         if ($bits[4] == 1) {
                             $bokad2 = "color: lightgreen; background: lightgreen;
                            ";
                             
                         } else {
                             $bokad2 = "color: red; background: red;";
                            
                         }
                            echo "<tr><td>$bits[0]</td><td>$bits[2]</td><td style=\"$bokad\">$bits[3]</td><td style=\"$bokad2\">$bits[4]</td></tr>";
                        // Plocka ut det som vi behöver
                        }
                        
                        
                        
                        
                       
                        
                 }
                
                       
                      
                
                 
                  
        } else {
            echo "<p>fil kan ej läsas</p>";
        }
        
      
        
        ?>
    </div>
</body>
</html>