<?php
//注册模式

class Register
{
    protected static  $objects;

    /**
     * @return mixed
     */
    public function getObjects($name)
    {
        return self::$objects[$name];
    }

    /**
     * @param mixed $objects
     */
    public function setObjects($alias,$objects): void
    {
        self::$objects[$alias] = $objects;
    }

}
$register = new Register();
$a = 2222;
$register->setObjects('xxx',$a);
var_dump($register->getObjects('xxx'));