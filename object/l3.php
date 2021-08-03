<?php

Class A1{
    static $v1 = 10;   //静态属性
    static $v3 = 30;   //静态属性

    public static function bb()
    {
        static::getV2();    //延迟静态绑定（可以调用子类的方法）
    }
}
Class B1 extends A1{
    public $c  = 88;
    /**
     * 获取v1
     * @return int
     */
    static public function getV1(): int
    {
        return self::$v1;    //调用静态变量
    }
    /**
     * 获取v1
     * @return int
     */
    static public function getV2()
    {
        $v2 = self::getV1();
        echo "\n 静态v2:".$v2;
    }
    static function  getNew(){
        return new self;  //self代表“当前类”
    }
}
Class C1 extends A1{

}
echo "\n v1:".B1::getV1();
B1::$v1 = 8;
echo "\n v1:".B1::getV1();  //静态属性改变
B1::bb();
echo "\n v1:".B1::$v3;
//$o = B1::getNew();
//$o = new B1();
//var_dump($o);  //实例化并不会实例静态属性和静态方法
echo "\n C1调用 v1:".C1::$v1;   //多对象公用v1
