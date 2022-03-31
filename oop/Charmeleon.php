<?php

class Charmeleon extends Pokemon
{
    public $name;
    public $attack;
    public $energyType;
    public $weakness;
    public $resistance;

    public function __construct($name)
    {
        $this->name = $name;
        $this->attack = [Attack::add('Head Butt Ring', 10), Attack::add('Flare', 30)];
        $this->energyType = EnergyType::add('Fire');
        $this->weakness = Weakness::add('water', 2);
        $this->resistance = Resistance::add('Lightning', 10);

        parent::__construct($this->health);
    }
}