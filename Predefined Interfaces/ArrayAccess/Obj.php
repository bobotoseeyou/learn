<?php

//提供像访问数组一样访问对象的能力的接口。
class Obj implements ArrayAccess
{
    private $container = array();

    public function __construct()
    {
//        $this->container = $array;
    }

    /**
     * — 检查一个偏移位置是否存在
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->container[$offset]);
    }

    /**
     * — 获取一个偏移位置的值
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        return isset($this->container[$offset]) ? isset($this->container[$offset]) : null;
    }

    /**
     * — 设置一个偏移位置的值
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        if (is_null($offset)){
            $this->container[] = $value;
        }else{
            $this->container[$offset] = $value;
        }
    }

    /**
     * — 删除一个偏移位置的值
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
        // TODO: Implement offsetUnset() method.
    }
}
$Obj = new  Obj();
$Obj['aa'] = 'cc';
$Obj['bb'] = 'hello';
var_dump($Obj);
var_dump($Obj['aa']);

unset($Obj['bb']);
var_dump($Obj);


//执行结果
//object(Obj)#1 (1) {
//["container":"Obj":private]=>
//  array(2) {
//    ["aa"]=>
//    string(2) "cc"
//    ["bb"]=>
//    string(5) "hello"
//  }
//}
//bool(true)
//object(Obj)#1 (1) {
//["container":"Obj":private]=>
//  array(1) {
//    ["aa"]=>
//    string(2) "cc"
//  }
//}