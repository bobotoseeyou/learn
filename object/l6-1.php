<?php
//方法重载：使用对象调用一个不存在的方法时。
//在类中可以调用类外面并且不是类中的方法。
function f1(){
    echo "\n f1函数执行啦";
}
function f2($x){
    echo "\n f2函数执行啦！参数x = $x";
}

class A{
    /**
     * @Notes:方法重载
     * @Interface __call
     * @param string $name  调用的方法名称
     * @param array $arguments 调用的参数
     * @author: bill
     */
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
        if ($name == 'f1'){
            f1();
        }else if ($name == 'f2'){
            f2($arguments[0]);
        }
    }

    /**
     * @Notes:静态方法重载
     * @Interface __callStatic
     * @author: bill
     */
    public static function __callStatic(string $name, array $arguments)
    {
        echo "\n 静态方法".$name;
    }
}
$o1 = new A();
$o1->f1();   //不存在的方法
$o1->f2(666);   //不存在的方法,带参数

a::f3();      //静态方法重载，必须定义__callStatic（）
