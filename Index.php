<?php

require_once('Character.php');
require_once('Hero.php');
require_once('Orc.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $personnage = new Hero('Excalibur', 800, 'Bouclier de Doran', 600, 2000, 0);
        $orc = new Orc(500, 0);
        ?>
    </div>
    <?php
    
    while ($personnage->getHealth() > 0) {
    ?>
        <div style="margin-top: 50px;">
            <h2>Attaque:</h2>
            <?php
            $orc->OrcAttacked();
            echo 'Dommages de l\'orc ' . $orc->getDamage() . ' dmg <br>';
            echo $personnage->attacked($orc->getDamage()) . '<br>';
            if ($personnage->getHealth() <= 0) {
                echo 'DIE MOTHER F****** !!!!!';
            } else {
                echo  'Vie du héros apres l\'attaque de l\'orc ' . $personnage->getHealth() . '<br>';
            }
            
            ?>
        </div>
    <?php
        
    }
    ?>
</body>

</html>