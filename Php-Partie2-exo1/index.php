<!DOCTYPE html>
<?php 
    $age = 18;
    if ($age >= 18) {
        $message = 'Vous êtes majeur.';
    }else {
        $message = 'Vous êtes mineur.';
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie1-exo8</title>
    </head>
    <body>
        <p><?= $message ?></p>
    </body>
</html>