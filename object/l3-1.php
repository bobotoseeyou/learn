<?php
//可见static有3个不同含义的语法:
//函数中的静态变量:
function f()
{
    static $v1 = 1;
}
//类中的静态成员:
class A{
    static  $v1= 1
    static function f(){}
}
//方法中的动态指代“当前类”:
class A{
    function f1(){
    static::f2();   //static此时指代调用f1这个方法的类( 或对象的类)
    self::f2():     //self这里永远指代当前A这个类
    }
}


