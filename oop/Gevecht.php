<?php

class Gevecht
{
    protected $pikachu;
    protected $charmeleon;
    public $result = array();

    public function __construct($pikachu, $charmeleon)
    {
        //assign pokemon objects
        $this->pikachu = $pikachu;
        $this->charmeleon = $charmeleon;
        //assign statics
        if($this->pikachu->health > 0){
            Statistieken::$alive +=1;
        }
        if($this->charmeleon->health > 0){
            Statistieken::$alive +=1;
        }
    }
    public function battle(){
        //battle if two pokemons
        while(Statistieken::$alive === 2){
            if($this->pikachu->energyType === 'Lightning'){
                $amount =  $this->pikachu->attack[0][1]-10;
                $this->charmeleon->health = $this->charmeleon->health - $amount;
            } else {
                $this->charmeleon->health = $this->charmeleon->health - $this->pikachu->attack[0][1];
            }
            if($this->charmeleon->energyType === 'Fire'){
                $amount = $this->charmeleon->attack[1][1] * 1.5;
                $this->pikachu->health = $this->pikachu->health - $amount;
            } else {
                $this->pikachu->health = $this->pikachu->health - $this->charmeleon->attack[1][1];
            }

            if($this->charmeleon->health > 0){
                $this->result[] = $this->pikachu->name.' valt '. $this->charmeleon->name. ' aan met '. $this->pikachu->attack[0][0];
            } else {
                Statistieken::$alive -= 1;
                $this->result[] = $this->pikachu->name.' valt '. $this->charmeleon->name. ' aan met '. $this->pikachu->attack[0][0];
                return $this->result[] = $this->charmeleon->name.' is dood. Gevecht voorbij!';

            }
            $this->result[] = $this->charmeleon->name. ' heeft nu '.$this->charmeleon->health. ' leven over';
            if($this->pikachu->health > 0){
                $this->result[] = $this->charmeleon->name.' valt '. $this->pikachu->name. ' aan met '. $this->charmeleon->attack[1][0];
            } else {
                Statistieken::$alive -= 1;
                $this->result[] = $this->charmeleon->name.' valt '. $this->pikachu->name. ' aan met '. $this->charmeleon->attack[1][0];
                return $this->result[] = $this->pikachu->name.' is dood. Gevecht voorbij!';
            }
            $this->result[] = $this->pikachu->name. ' heeft nu '.$this->pikachu->health. ' leven over';
        }
    }
}