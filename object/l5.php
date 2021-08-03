<?php
//抽象类-企业
abstract class car{
    const  NUIT = 'km';//距离单位
    protected static $distance = 100; //能跑多远
    protected static $once  =  10; // 一次跑
    //抽象方法
    protected abstract function run();
    //汽车能跑。子类必须实现
}

class byd extends  car{
    function info(){
        echo "\n 比亚迪车能跑";
    }

    function run(){
        self::$distance = self::$distance  - self::$once;
        echo "\n 车还能跑".self::$distance.self::NUIT;
    }
}
$byd1 = new byd();
$byd1->info();
$byd1->run();
$byd1->run();
$byd1->run();
