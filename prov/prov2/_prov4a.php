<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Djuralfabetet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h2>Djuralfabetet</h2>
        <p>Här söker du djur efter deras första bokstav.<br>
            Tex. djur som börjar på 'a' med: skriv 'a'.<br>
            Tex. djur som börjar på 'a' eller 'b' med: skriv 'a, b' .</p>
        <form class="kol2" action="#" method="post">
            <label>Ange sökterm</label>
            <input type="text" name="sokterm">
            <button>Sök</button>
        </form>
        <?php
        
$input = filter_input(INPUT_POST,"sokterm", FILTER_SANITIZE_STRING);
        if ($input) {
            //fil att kolla i
            $filetxt = "animals.txt";
            $file = file($filetxt);
            
                //explode på ,
            $input = explode("," ,$input);
            //för varje bokstav gör
         foreach ($input as $key => $start) {
             //se till att det är den första bokstaven
            $firstLetter = substr($start, 0, 1);
         //skriv ut en tabell
            echo "<table class=\"table table-striped\">";
            echo "<tr><th>$antal djur som startar på $firstLetter</th></tr>";
            //för varje rad i filen
            foreach ($file as $key => $djur) {
                //ta ut första bokstaven av djuren
                $firstLetterdjur = substr($djur, 0, 1);

              //är första boksatv i input samma som djur första bokstav
                if ($firstLetterdjur == $firstLetter) {
                    //if true skriv ut djuret
                    echo "<tr><td>$djur</td></tr>";
                    
                } else {
                    //continue och ignore djur som inte startar på samma som input
                    continue;
                }
            }
            echo "</table>";
            echo "<table class=\"table table-striped\">";
         }
        } 
            
          

          
           
       


        ?>
    </div>
</body>
</html>