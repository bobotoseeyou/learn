<?php
//属性重载学习
class A{
    public $p = 1;
    public $p2 = 3;
    //取值
    public function __get(string $name)
    {
        echo "\n 警告".$name.'不存在';
    }
    //赋值
    public function __set(string $name, $value): void
    {
        $this->$name = $value;
        echo "\n 不存在属性".$name.'赋值';
    }
    //判断是否存在
    public function __isset(string $name): bool
    {
        if (isset($this->$name)){
            echo "\n 判断".$name.'存在';
            return true;
        }else{
            echo "\n 判断".$name.'不存在';
            return  false;
        }
    }
    //销毁
    public function __unset(string $name): void
    {
        echo "\n 销毁".$name;
        unset($this->$name);
    }
}
//属性重载
$o = new A();
echo "\n 数据p=".$o->p;       //存在的属性
echo "\n 数据p1=".$o->p1;     //不存在属性，自动调用__get();
$o->p1 = 10;                 //不存在的属性赋值，自动调用__set();
echo "\n 更新数据p1=".$o->p1;
echo "\n 分割---";
unset($o->p3);              //不存在的属性销毁，自动调用__set();
echo "\n 分割---";
//var_dump($o);


