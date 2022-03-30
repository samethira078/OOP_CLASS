<?php
include_once 'Pokemon.php';
include_once 'Attack.php';
include_once 'Pikachu.php';
include_once 'EnergyType.php';
include_once 'Resistance.php';
include_once 'Weakness.php';
include_once 'Gevecht.php';

$pikachu = new Pokemon('Pikachu');

echo "<pre>";
print_r($pikachu->pikachu());
echo "</pre>";
