<?php
class Attack
{
    protected static $name;
    protected static $value;

    static function add($name, $value){
        self::$name = $name;
        self::$value = $value;

        return array(self::$name, self::$value);
    }
}