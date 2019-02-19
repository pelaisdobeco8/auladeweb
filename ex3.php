<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula Web</title>
    </head>
    <body>
        <?php
            $media = 7.5;
            $freq = 0.85;
            
            if ($media>=6 && $freq>0.75) {
                echo "Aprovado!";
            }else {
                echo "Reprovado!";
            }
        ?>
    </body>
</html>
