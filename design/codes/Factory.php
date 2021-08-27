<?php
/**
 *简单工厂模式（静态工厂方法模式）
 */
/**
 * Interface Animal
 * 牲口(仅仅是定义接口，可以无)
 */
interface Animal{
    function say();
}
class ErNing implements Animal{
    function say()
    {
        // TODO: Implement say() method.
        echo "\n我是宁边";
    }
}
class SanPi implements Animal{
    function say()
    {
        // TODO: Implement say() method.
        echo "\n我是三皮";
    }
}


class SimpleFactoty
{
    //宁边
    static function createErNing(){
        return new ErNing();
    }
    //三皮
    static function createSanPi(){
        return new SanPi();
    }
}
$ningbian = SimpleFactoty::createErNing();
$ningbian->say();
$sanpi = SimpleFactoty::createSanPi();
$sanpi->say();


//工厂模式是我们最常用的实例化对象模式，是用工厂方法代替new操作的一种模式。

//使用工厂模式的好处是，如果你想要更改所实例化的类名等，则只需更改该工厂方法内容即可，不需逐一寻找代码中具体实例化的地方（new处）修改了。为系统结构提供灵活的动态扩展机制，减少了耦合。