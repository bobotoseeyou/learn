<?php

/**
 * Interface Transport
 * 交通方式（定义方式接口）
 */
interface  Transport{
    function velocity();
}
class Run implements Transport{
    public $name = '跑步';
    public function velocity()
    {
        echo "\n 5km\h";
    }
}
class Bus implements Transport{
    public $name = '公交车';
    public function velocity()
    {
        echo "\n 50km\h";
    }
}
//去上班
class GoToWork
{
    private $_transportBehavior;

    public function setTransport(Transport $type)
    {
        $this->_transportBehavior = $type;
    }
    
    /**
     * @return mixed
     */
    public function getTransportBehavior()
    {
        return $this->_transportBehavior->velocity();
    }

    public function get_name()
    {
        var_dump($this->_transportBehavior->name);
    }
}
//bobo想去上班
class Bobo extends GoToWork{
}
$bobo = new Bobo();
$bobo->setTransport(new Bus());
$bobo->getTransportBehavior();
$bobo->get_name();
$bobo->setTransport(new Run());
$bobo->getTransportBehavior();
$bobo->get_name();
//策略模式的三个角色：
//1．抽象策略角色
//2．具体策略角色
//3．环境角色（对抽象策略角色的引用）
//实现步骤：
//1．定义抽象角色类（定义好各个实现的共同抽象方法）
//2．定义具体策略类（具体实现父类的共同方法）
//3．定义环境角色类（私有化申明抽象角色变量，重载构造方法，执行抽象方法）