<?php

class EnergyType
{
    protected static $name;

    static function add($name){
        self::$name = $name;

        return self::$name;
    }
}