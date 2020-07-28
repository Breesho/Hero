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

        echo 'Un ennemi arrive !<br>';
        echo 'Vie: ' . $this->getHealth() . '<br>';
        echo 'Rage: ' . $this->getRage() . '<br>';
    
    }

    public function OrcAttack() {
        $this->setDamage(rand(600, 800));
    }

}