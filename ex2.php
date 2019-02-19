<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula Web</title>
    </head>
    <body>
        <?php
            $salario = 2000;
            $bonus1 = ($salario * 40)/100;
            $bonus2 = ($salario * 30)/100;
            $final = 0;
                
            if ($salario<=1000) {
                $final = $slario+$bonus1;   
            }else {
                $final = $salario+$bonus2;
            }
                echo $final;    
        ?>
    </body>
</html>
