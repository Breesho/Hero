<?php

class Character {
    private $health;
    private $rage;

    public function getHealth() {
        return $this->health;
    }

    public function getRage() {
        return $this->rage;
    }

    public function setHealth($healthValue) {
        $this->health = $healthValue;
    }

    public function setRage($rageValue) {
        $this->rage = $rageValue;
    }

    public function __construct($healthValue, $rageValue) {
        $this->health = $healthValue;
        $this->rage = $rageValue;
        // $this->setHealth($healthValue);
        // $this->setRage($rageValue);
    }
    
}


