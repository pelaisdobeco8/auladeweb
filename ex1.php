<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aulaweb</title>
    </head>
    <body>
        <?php
            $n1=0;
            $n2=0;
            $n3=0;
            $n4=0;
            $media =($n1+$n2+$n3+$n4)/4;
            if ($media>=6) {
                echo "Aprovado!";
            }else {
                echo "Reprovado!";
            }         
        ?>
    </body>
</html>
