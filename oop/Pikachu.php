<?php

class Pikachu extends Pokemon
{
    protected $addEnergyType = 'Lightning';
    protected $addHealth = 60;
    protected $addAttack= array('Electric Ring' => 50, 'Pika Punch' => 20);
    protected $addResistance = array('Fighting' => 20);
    protected $addWeakness = array('Fire' => 1,5);

    public function __construct($name)
    {
        parent::__construct($name);
        $this->energyType = $this->addEnergyType;
        $this->health = $this->addHealth;
        $this->attack = $this->addAttack;
        $this->resistance = $this->addResistance;
        $this->weakness = $this->addWeakness;
    }
}