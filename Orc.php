<?php

class Orc extends Character {
    
    private $damage;

    public function getDamage() {
        return $this->damage;
    }
    
    public function setDamage($damageValue) {
        $this->damage = $damageValue;
    }

    public function __construct($healthValue, $rageValue) {
        parent::__construct($healthValue, $rageValue);

        echo '<h1>Un ennemi arrive !</h1><br>';
        echo '<h2>Vie: ' . $this->getHealth() . '</h2><br>';
        echo '<h2>Rage: ' . $this->getRage() . '</h2><br>';
    
    }

    public function OrcAttack() {
        $this->setDamage(rand(600, 800));
    }

}