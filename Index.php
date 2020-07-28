<?php

require_once('Character.php');
require_once('Hero.php');
require_once('Orc.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="fighter" class="flex">

        <div class="left-container">
            <?php $personnage = new Hero('Excalibur', 250, 'Bouclier de Doran', 600, 2000, 0); ?>
        </div>
        <div class="right-container">
            <?php $orc = new Orc(500, 0); ?>
        </div>

    </div>
    <?php

    while ($personnage->getHealth() > 0 && $orc->getHealth() > 0) {
    ?>
        <div class="container-assault">
            <div class="container-padding">
                <h2>Attaque:</h2>
                <?php
                $orc->OrcAttack();
                $orc->getDamage() ;
                $personnage->attacked($orc->getDamage()) . '<br>';
                $personnage->addRage();
                ?>
                <div class="orc-color">
                <?php
                echo '<h3>Dégats de l\'orc :' . $orc->getDamage() . '</h2>' ; 
                if ($personnage->getRage() > 100) {
                    $orc->setHealth($orc->getHealth() - $personnage->getWeaponDamage());
                    $personnage->getWeaponDamage();
                    
                    $personnage->setRage(0);
                    if ($orc->getHealth() <= 0) {
                        echo 'Orc is dead ! <br>';
                    } else {
                        echo '<h3>vie de l\'orc: ' . $orc->getHealth() . '</h3><br>';
                    }
                }
                ?>
                </div>

                <div class="hero-color">
                <?php
                               
                if ($personnage->getHealth() <= 0) {
                    echo 'DIE MOTHER F****** !!!!!';
                } else {
                    echo  '<h3>Vie du héros: ' . $personnage->getHealth() . '</h2><br>';
                }
                echo '<h3>La Rage du héro : ' . $personnage->getRage() . '</h2><br>';
                if ($personnage->getRage() >= 100) {
                echo '<h3>Le Héro Inflige: ' . $personnage->getWeaponDamage() . ' Dégats </h3><br>';
                }
                ?>
</div>
</div>
        </div>
    <?php

    }
    ?>
</body>

</html>