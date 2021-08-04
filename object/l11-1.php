<?php

Class A extends C{
    public $p1 = 1;
    function f1(){
        echo "\n 当前对象的类".get_class($this);
        echo "\n p1的值：".$this->p1;
        @B::f2();
        $this->f3();
    }
}

Class B{
    function f2(){
//        echo "\n p1的值：";
        echo "\n 当前对象的类".get_class($this);
        echo "\n p1的值：".$this->p1;
    }
}

Class C{
    function f3(){
        echo "\n 当前对象的类".get_class($this);
        echo "\n p1的值：".$this->p1;
    }
}
$o = new A();
$o->f1();
