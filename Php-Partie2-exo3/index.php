<!DOCTYPE html>
<?php 
    $age = 21;
    $gender = 'Homme';
    if ($gender == 'Homme') {
        $message = 'Vous êtes un homme';
    }else {
        $message = 'Vous êtes une femme';
    }
    if ($age >= 18) {
        $message .= ' et vous êtes majeur';
    }else {
        $message .= ' et vous êtes mineur';
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie2-exo3</title>
    </head>
    <body>
    <p><?= $message ?></p>
    </body>
</html>