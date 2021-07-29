<?php


class Animal
{
    protected static $type  = "牲口";

}

Class people extends Animal {
    static $name = '宁边';
    public function __construct($name)
    {
        self::$name = $name;
        echo "\n 这是一只".self::$name;
        echo "\n 而且一只".self::$type;
    }
}
$ningbian = new people('菜鸡宁');