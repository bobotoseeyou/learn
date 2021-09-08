<?php
//把错误以异常的形式抛出(不能完全抛出)
//缺点；受到set_error_handler()函数捕获级别的限制，不能捕获系统级E_ERROR、E_PARSE等错误，
set_error_handler('mycatch');   //指定异常触发的函数
function mycatch($type, $message, $file, $line){
    throw new \Exception($message.'-mycatch');
}

$numsddsad = [];
try {
    echo  $numsddsad['xxxx'];
}catch (Exception $e){
    echo $e->getMessage();
}
//输出：Undefined index: xxxx-mycatch
//demo.php里面是无法输出这类错误的.tp等框架就是用的这种来捕捉异常的