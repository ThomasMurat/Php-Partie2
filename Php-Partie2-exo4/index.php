<!DOCTYPE html>
<?php 
    $magnitude = 1;
    switch ($magnitude) {
        case 1:
            $message = 'Micro-séisme impossible à ressentir.';
        break;
        case 2:
            $message = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
        break;
        case 3:
            $message = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
        break;
        case 4:
            $message = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
        break;
        case 5:
            $message = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
        break;
        case 6:
            $message = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
        break;
        case 7:
            $message = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
        break;
        case 8:
            $message = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
        break;
        case 9:
            $message = 'Séisme capable de tout détruire sur une très vaste zone.';
        break;
        default:
            $message = 'valeur incorrect, entrez un entier entre 1 et 9';
        break;
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie2-exo4</title>
    </head>
    <body>
        <p><?=$message?></p>
    </body>
</html>