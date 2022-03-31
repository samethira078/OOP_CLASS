<?php

class Statistieken extends Gevecht
{
    protected static $alive= 0;

    public static function getPopulation(){
        return self::$alive;
    }
}