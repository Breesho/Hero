<?php

require_once('Character.php');
require_once('Hero.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $personnage = new Hero('Excalibur', 2000, 'Bouclier de Doran', 1500, 1800, 20);
        $personnage->attacked(2000);
        echo $personnage->getHealth();
    ?>
</body>
</html>