<?php
Class Animal{
    public $nose = "有一个鼻子";
    protected  $ear = "这是个受保护的耳朵";  //protected收保护的，只能在当前类或者有继承关系的上下级使用；
    private    $tail = "这是一个尾巴";      //private修饰符只能在本类中使用

    /**
     * Animal constructor.
     * 子类没有定义构造函数会自动调用
     */
    public function __construct()
    {
        echo "\n 父构造方法";
    }
}
/**
 * Class cat
 */
Class cat extends Animal{
    public $name = "辛巴";
    public $age  = 3;
    protected  $weight = 10;
    const MESSAGE  = "这只是胆小的蓝白猫"; //不实例化，外部也可以调用
    /**
     * 构造方法
     * 类在实例化的时候（new对象），自动调用
     * cat constructor.
     */
    public function __construct($name,$age)
    {
        parent::__construct();
        $this->name = $name;
        $this->age  = $age;
        echo "\n对象被创建";
    }

    /**
     * 析构方法
     * 销毁对象的时候，自动调用
     * 用于清理一些在PHP代码结束后不能清理的数据，如生成的文件；
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "\n对象被销毁";
    }
    //介绍
    public function intro()
    {
        echo "\n你们好.我叫".$this->name;
        echo "\n今年".$this->age."岁";
        echo "\n体重:".$this->weight.'斤';
    }

}
//继承测试
$cat_mod = new cat('饭团',2);
//$cat_mod = new cat();   //必须传参，且对应，不然报错
$cat_mod->intro();

echo "\n 对象外查看".$cat_mod->nose;
//echo "\n 对象外查看".$cat_mod->weight;  类外无法查看 受保护的属性
echo "\n 常量:".$cat_mod::MESSAGE;
echo "\n 常量:".cat::MESSAGE;