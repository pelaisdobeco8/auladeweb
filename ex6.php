<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula Web</title>
    </head>
    <body>
        <?php
            $n1 = 0;
            $n2 = 5;
            $n3 = 3;
            
            if ($n1>$n2 && $n1>$n3) {
                echo $n1;
            }elseif ($n2>$n1 && $n2>$n3) {
                echo $n2;
            }else {
                echo $n3;
            }
        ?>
    </body>
</html>
