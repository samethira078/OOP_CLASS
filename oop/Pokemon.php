<?php
class Pokemon
{
    protected $name;
    protected $attack;
    protected $health;
    protected $weakness;
    protected $resistance;
    protected $energyType;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function pikachu(){
        $pokemon = new Pikachu($this->name);
    }
    public function charmeleon(){
        $pokemon = new Charmeleon($this->name);
    }
}