<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula de Web</title>
    </head>
    <body>
        <?php
            $idade = 40;
            
            if ($idade<18 || $idade>60) {
                echo "Pague meia entrada";
            }else {
                echo "Pague inteira";
            }
        ?>
    </body>
</html>
