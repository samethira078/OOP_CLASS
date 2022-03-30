<?php

include 'Statistieken.php';
include 'Gevecht.php';

class Pokemon
{
    protected $name;
    protected $attack;
    protected $weakness;
    protected $resistance;
    protected $energyType;

    public function __construct($name){
        $this->name = $name;
    }
    public function attack($value){
        return $this->attack = $value;
    }
    public function energy($value){
        return $this->energyType = $value;
    }
    public function resistance($value){
        return $this->resistance = $value;
    }
    public function weakness($value){
        return $this->weakness = $value;
    }

}