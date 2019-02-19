<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula Web</title>
    </head>
    <body>
        <?php
            $n1 = 3;
            $n2 = 9;
            
            if ($n1 == $n2) {
                echo "Números iguais";
            }elseif ($n1>$n2) {
                echo $n1. " é maior que ". $n2;
            }else {
                echo $n1. " é menor que ". $n2;
            }
        ?>
    </body>
</html>
