<?php
class Pokemon
{
    //Standard value for each Pokemon.
    public $health = 60;

    public function __construct($health){
        $this->health = $health;
    }
}