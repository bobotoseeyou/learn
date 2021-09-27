<?php
function myException($exception){
    echo '错误：'.$exception->getMessage();
}
set_exception_handler('myException');  //设置抛出执行的函数

throw new Exception('手动抛出');     //手动抛出


