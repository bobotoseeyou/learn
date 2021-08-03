<?php
class A{
    static $p1 = 1;
    static function showInfo(){//可继承
        //self代表当前类:指其代码所在的类(静态绑定)
        echo "\n" . self::$p1;
    }
    static function showInfo2(){//可继承
        //static也代表“当前类”:调用本方法的类
        //static这个词有时候跟self代表同一个类，
        //也有时候代表不同的类: static代表的是 调用者(动态绑定)
        //通常认为，这种情形更符合现实的需要1
        //可见self完全可以被static代替使用。
        echo "\n".static::$p1;
    }
}
class B extends A{
    static $p1 = 10; //进行了属性覆盖
}
A::showInfo();//毫无疑问: 1
B::showInfo();//结果是1//因为self永远代表其所在代码的类

A::showInfo2();//结果是1
B::showInfo2();//结果是10