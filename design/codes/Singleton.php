<?php

//单例模式
class Singleton
{
    private $name;                      //私有属性，防止被外部调用
    static private $instance;           //私有属性，防止被外部调用
    private function __construct(){}   //私有的构造方法，防止外部new对象
    private function __clone(){}        //私有的clone方法，防止clone对象
    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
$sa = Singleton::getInstance();
$sa->setName("hello sa");
$sb = Singleton::getInstance();
echo "\n".$sb->getName();           //
$sb->setName("hello sb");
echo "\n".$sa->getName();           //
echo "\n".$sb->getName();      //结果：


//单例模式确保某个类只有一个实例，而且自行实例化并向整个系统提供这个实例。
//单例模式是一种常见的设计模式，在计算机系统中，线程池、缓存、日志对象、对话框、打印机、数据库操作、显卡的驱动程序常被设计成单例。
//单例模式分3种：懒汉式单例、饿汉式单例、登记式单例。
//单例模式有以下3个特点：
//1．只能有一个实例。
//2．必须自行创建这个实例。
//3．必须给其他对象提供这一实例。
//那么为什么要使用PHP单例模式？
//针对单次页面级请求时出现多个应用场景并需要共享同一对象资源

/*
掌握满足单例模式的必要条件
(1)需要一个保存类的唯一实例的静态成员变量:
(2). 构造函数和克隆函数必须声明为私有的，防止外部程序new类从而失去单例模式的意义:
(3)必须提供一个访问这个实例的公共的静态方法（通常为getInstance方法），从而返回唯一实例的一个引用
*/

//2、单例模式在PHP中的应用场合：
//
//（1）、应用程序与数据库交互
//
//一个应用中会存在大量的数据库操作，比如过数据库句柄来连接数据库这一行为，使用单例模式可以避免大量的new操作，因为每一次new操作都会消耗内存资源和系统资源。
//
//（2）、控制配置信息
//
//如果系统中需要有一个类来全局控制某些配置信息, 那么使用单例模式可以很方便的实现.

 


 
