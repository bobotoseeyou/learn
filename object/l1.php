<?php

class Animal
{
    static $type  = "牲口";
}

Class Duck extends Animal {
    static $attribute = '鸭子';
    static $name;
    public function __construct($name)
    {
        self::$name = $name;
        echo "\n".self::$name.'是一只'.self::$attribute;
        echo "\n 而且属于".self::$type;
    }

    public function say()
    {
        echo "\n 叫声gagagagaga";
    }
}
$Donald_duck = new Duck('唐老鸭');
$Donald_duck->say();