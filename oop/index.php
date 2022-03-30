<?php
include 'Pokemon.php';
include 'Attack.php';
include 'EnergyType.php';
include 'Resistance.php';
include 'Weakness.php';
include 'Gevecht.php';

$pikachu = new Pokemon('Pikachu');
$pikachu->attack(Attack::pokemon_attack(array('Electric Ring' => 50, 'Pika Punch' => 20)));
$pikachu->energy(EnergyType::pokemon_energy('Lightning'));
$pikachu->resistance(Resistance::pokemon_resistance(array('Fighting' => 20)));
$pikachu->weakness(Weakness::pokemon_weakness(array('Fire' => 1,5)));


$charmeleon = new Pokemon('Charmeleon');
$charmeleon->attack(Attack::pokemon_attack(array('Head Butt Ring' => 10, 'Flare' => 30)));
$charmeleon->energy(EnergyType::pokemon_energy('Fire'));
$charmeleon->resistance(Resistance::pokemon_resistance(array('Lightning' => 10)));
$charmeleon->weakness(Weakness::pokemon_weakness(array('water' => 2)));

$battle = new Gevecht();


echo "<pre>";
print_r($pikachu);
print_r($charmeleon);
echo "</pre>";
