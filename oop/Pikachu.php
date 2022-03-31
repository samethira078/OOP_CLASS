<?php

class Pikachu extends Pokemon
{
    public $name;
    public $attack;
    public $energyType;
    public $weakness;
    public $resistance;

    public function __construct($name)
    {
//        Pika values
        $this->name = $name;
        $this->attack = [Attack::add('Electric Ring', 50), Attack::add('Pika Punch', 20)];
        $this->energyType = EnergyType::add('Lightning');
        $this->weakness = Weakness::add('Fire', intval(1.5));
        $this->resistance = Resistance::add('Fighting', 20);
//  Extend health to properties
        parent::__construct($this->health);
    }
}