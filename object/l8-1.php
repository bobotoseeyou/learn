<?php

Class B{
    public $b1 = 1;
}
Class  C{
    public $c1 = 3;
}
Class A{
    public $a1 = 2;
    public $b2;
    public $c2;
    function __construct(){
        $this->b2 = new B();
    }
    function __clone()
    {
        $this->c2 = '111';   //深度克隆
    }
}
$obj = new A();
$obj_b= clone  $obj;
$obj->a1 = 3;
$obj->b2->b1 = 10;     //浅克隆
$obj->c2->c1 = 10;

var_dump($obj);
var_dump($obj_b);
