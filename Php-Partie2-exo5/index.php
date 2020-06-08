<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie2-exo5</title>
    </head>
    <body>
    <?php 
        //echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        if($gender != 'Homme') {
            echo 'C\'est une développeuse !!!';
        }else {
            echo 'C\'est un développeur !!!';
        }
    ?>
    </body>
</html>