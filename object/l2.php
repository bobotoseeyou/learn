<?php


Class Animal{
    public $nose = "有一个鼻子";
    protected  $ear = "这是个受保护的耳朵";  //protected收保护的，只能在当前类或者有继承关系的上下级使用；
    private    $tail = "这是私有一个尾巴";      //private修饰符只能在本类中使用
    public function show()
    {
        echo "\n动物特征:".$this->nose;
        echo "\n动物特征:".$this->tail.",不准摸";
        echo "\n调用猫咪的名字：".$this->name;    //可以调用子类的属性（看起来很奇怪）
    }

}

/**
 * Class cat（子类）
 * 单继承（Animal）
 */
Class cat extends Animal{
    public $name = "辛巴";
    public $age  = 3;
    protected  $weight = 10;
    //介绍
    public function intro()
    {
        echo "\n你们好.我叫".$this->name;
        echo "\n今年".$this->age."岁";
        echo "\n鼻子:".$this->nose;
        echo "\n体重:".$this->weight.'斤';
        echo "\n".$this->ear;
        echo "\n".$this->tail;   //不报错
    }
    public function miao()
    {
        var_dump("miaomiao");
    }
}
$c1 = new cat();
//$c2 = new cat();
//unset($c1); //对象被销毁
//$c2 = 2;   //没有变量指向对象，对象就会被销毁
$c1->intro();
$c1->show();
$c1->xxx;  //调用不存在的属性不会报错
//$c1->xxx(); //调用不存在的方法会报错