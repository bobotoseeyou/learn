<?php
//__autoload魔术方法已经废弃 php > 7.2
//function __autoload($className){
//    return "../".$className.".php";
//};

function loadprint( $class ) {
    $file = $class.'.php';
    if (is_file($file)) {
        require_once($file);
    }
}
spl_autoload_register( 'loadprint' );    //没有定义的类就执行loadprint
$bird = new PRINTIT();
$bird->doPrint();
