<?php

//卵生动物
interface oviparous{
    //下蛋
    function eggs();   //接口类中的方法都是抽象方法。不需要声明抽象
}
//飞禽
interface flyAnimal{
    //飞禽只能有俩脚
    const FOOT = 2;   //接口常量，子类不可以重新声明
    //飞
    function fly();   //接口方法，子类必须实现这个方法
}

abstract class bird{
    public $wings = "2"; //俩翅膀
    abstract function create();   //我想创造一只小鸟
}

class  sparrow  extends bird implements  oviparous,flyAnimal{

    function create()
    {
        echo "\n 继承抽象类bird";
    }
    function eggs(){
        echo "\n 卵生动物必须下蛋";
    }
    function fly(){
        echo "\n 飞禽必须能飞";
    }
}
$o = new sparrow();
$o->create();
$o->fly();
$o->eggs();
echo "\n 麻雀有".$o::FOOT."个脚";


