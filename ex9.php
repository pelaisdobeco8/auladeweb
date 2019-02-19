<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula Web</title>
    </head>
    <body>
        <?php
            $conta = 0;
        
            for ($i=1; $i<11; $i++){
                for ($j=1; $j<11; $j++) {
                    $conta = $i*$j;
                    echo "<br>";
                    echo $i. "X". $j. "=". $conta;
                }
                echo "<br>";
            }
        ?>
    </body>
</html>
