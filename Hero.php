<?php

class Hero extends Character {
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function getWeapon() {
        return $this->weapon;
    }

    public function getWeaponDamage() {
        return $this->weaponDamage;
    }

    public function getShield() {
        return $this->shield;
    }

    public function getShieldValue() {
        return $this->shieldValue;
    }
    
    public function setWeapon($weaponName) {
        $this->weapon = $weaponName;
    }

    public function setWeaponDamage($weaponDamageValue) {
        $this->weaponDamage = $weaponDamageValue;
    }

    public function setShield($shieldName) {
        $this->shield = $shieldName;
    }
    
    public function setShieldValue($shieldDefenseValue) {
        $this->shieldValue = $shieldDefenseValue;
    }

    public function __construct($weaponName, $weaponDamageValue, $shieldName, $shieldDefenseValue, $healthValue, $rageValue) {
        parent::__construct($healthValue, $rageValue);

        $this->weapon = $weaponName;
        $this->weaponDamage = $weaponDamageValue;
        $this->shield = $shieldName;
        $this->shieldValue = $shieldDefenseValue;

        echo '<h1>Vous venez de créer votre hero !</h1>';
        echo '<h2>Vie: ' . $this->getHealth() . '</h2>';
        echo '<h2>Rage: ' . $this->getRage() . '</h2>';
        echo '<h2>Arme: ' . $this->getWeapon() . '</h2>';
        echo '<h2>Dommages: ' . $this->getWeaponDamage() . '</h2>';
        echo '<h2>Bouclier: ' . $this->getShield() . '</h2>';
        echo '<h2>Defense: ' . $this->getShieldValue() . '</h2>';
    }

    public function attacked($attackValue) {
        $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
        $this->setHealth($newHealth);
    }

    public function addRage() {
     $this->setRage($this->getRage() + 20) ;
    }
}