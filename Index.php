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
        $personnage = new Hero('Excalibur', 250, 'Bouclier de Doran', 600, 2000, 0);
        $orc = new Orc(500, 0);
        ?>
    </div>
    <?php
    
    while ($personnage->getHealth() > 0 && $orc->getHealth() > 0) {
    ?>
        <div style="margin-top: 50px;">
            <h2>Attaque:</h2>
            <?php
            $orc->OrcAttack();
            echo 'Dommages de l\'orc ' . $orc->getDamage() . ' dmg <br>';
            echo $personnage->attacked($orc->getDamage()) . '<br>';
            echo 'Rage du Hero: ' . $personnage->addRage();
            if ($personnage->getRage() > 100) {
                $orc->setHealth($orc->getHealth() - $personnage->getWeaponDamage());
                $personnage->setRage(0);
                if ($orc->getHealth() <= 0) {
                    echo 'Orc is dead ! <br>';
                } else {
                     echo 'vie de l\'orc: ' . $orc->getHealth() . '<br>';
                }
            } 
            echo $personnage->getRage() . '<br>';
            if ($personnage->getHealth() <= 0) {
                echo 'DIE MOTHER F****** !!!!!';
            } else {
                echo  'Vie du héros: ' . $personnage->getHealth() . '<br>';
            }
            
            ?>
        </div>
    <?php
        
    }
    ?>
</body>

</html>