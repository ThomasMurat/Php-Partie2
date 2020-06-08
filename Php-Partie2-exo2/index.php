<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie1-exo8</title>
    </head>
    <body>
    <?php 
        $isEasy = false;
        if ($isEasy) {
            $message = 'C\'est facile !!';
        }else {
            $message = 'C\'est difficile !!!';
        }
    ?>
    <p><?php echo $message ;?></p>
    </body>
</html>