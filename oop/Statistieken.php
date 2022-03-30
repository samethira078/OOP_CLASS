<?php

include_once 'Statistieken.php';

class Statistieken extends Gevecht
{
    public function __construct($pokemon1, $pokemon2)
    {
        parent::__construct($pokemon1, $pokemon2);
    }

    public function statics(){
//        while(true){
            $pokemons = array_merge($this->pokemon1, $this->pokemon2);
            return $pokemons;
//        }
    }
}