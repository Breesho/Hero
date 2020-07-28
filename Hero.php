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

        echo 'Vous venez de créer votre hero !<br>';
        echo 'Vie: ' . $this->getHealth() . '<br>';
        echo 'Rage: ' . $this->getRage() . '<br>';
        echo 'Arme: ' . $this->getWeapon() . '<br>';
        echo 'Dommages: ' . $this->getWeaponDamage() . '<br>';
        echo 'Bouclier: ' . $this->getShield() . '<br>';
        echo 'Defense: ' . $this->getShieldValue() . '<br>';
    }

    public function attacked($attackValue) {
        $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
        $this->setHealth($newHealth);
    }

    public function addRage() {
     $this->setRage($this->getRage() + 30) ;
    }
}