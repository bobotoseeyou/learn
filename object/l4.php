<?php


Class father{
    public $name = "father";
    public function show()
    {
        echo "\n 父类是".$this->name;
    }
}

Class son extends  father {
    public $name = "son";
    /**
     *
     * @Notes:覆盖的方法的参数形式必须跟父类一样
     * @Interface show
     * @author: bill
     */
    public function show()
    {
        parent::show();
        echo "\n 我是".$this->name;
    }
}
$son = new son();
$son->show();

/**
 * Class car
 * 最终类（不能被继承）
 */
final class  car {
    //最终方法，不能被下级覆盖
    final function run(){

    }
}