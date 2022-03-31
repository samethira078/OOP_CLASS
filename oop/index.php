<?php
include_once 'Pokemon.php';
include_once 'Attack.php';
include_once 'EnergyType.php';
include_once 'Resistance.php';
include_once 'Weakness.php';
include_once 'Gevecht.php';
include_once 'Statistieken.php';
include_once 'Pikachu.php';
include_once 'Charmeleon.php';
$pikachu = new Pikachu( 'Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

    $fight = new Gevecht($pikachu, $charmeleon);
    echo 'Er zijn nu '.Statistieken::getPopulation(). ' pokemon levend!';
    $fight->battle();
    echo "<br>";

    foreach ($fight->result as $result){
        echo '<br>'. $result . '<br>';
    }
    echo "<br>";
    echo 'Er zijn nu '.Statistieken::getPopulation(). ' pokemon levend!';
