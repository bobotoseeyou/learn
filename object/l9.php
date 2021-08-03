<?php

 function info(int $a,int $b){
        return  $a +$b;
 }

 $a = 111;
 $b = 222;
var_dump(info($a,$b));
class MyClass{
    function MyFun(MyClass1 $arg){		//第一个参数为MyClass1类的一个对象
        var_dump(__CLASS__);
        var_dump(__METHOD__);
        echo "\nMyClass->MyFun<br>";
    }

    function MyFun1(array $arg){		//第一个参数为数组
        echo "MyClass->MyFun1<br>";
    }

    function MyFun2(Traversable $arg){	//第一个参数为递归类型
        echo "\nMyClass->MyFun2<br>";
    }

    function MyFun3(callable $callback, $data){		//第一个参数为回调类型
        echo "\nMyClass->MyFun3<br>";

        call_user_func($callback,$data);
    }
}

class MyClass1{
    public $var = 'PHP';
}

$foo = new MyClass();
$bar = new MyClass1();

$foo->MyFun($bar);
$foo->MyFun1(array('PHP','Java','Python'));
$foo->MyFun2(new ArrayObject(array()));
$foo->MyFun3('var_dump','hello');



class NewClass {
    public $var = 'Hello World';
}
$myclass = new NewClass;
//类型约束
function test(NewClass $arg) : object {
    $arg->var = "world chage";
    return $arg;
}
echo test($myclass)->var;

