<?php
error_reporting(0);   //关闭错误报告
register_shutdown_function('zyfshutdownfunc');   //捕获错误
function zyfshutdownfunc()
{
    if ($error = error_get_last()) {
        var_dump('<br>register_shutdown_function: Type:' . $error['type'] . ' Msg: ' . $error['message'] . ' in ' . $error['file'] . ' on line ' . $error['line'] . '<br>');
    }
}

set_error_handler('zyferror'); //捕获错误
function zyferror($type, $message, $file, $line)
{
    var_dump('<b>set_error_handler: ' . $type . ':' . $message . ' in ' . $file . ' on ' . $line . ' line .</b><br />');
}

// 模拟Fatal error错误
//test();

// 模拟用户产生ERROR错误
//trigger_error('zyf-error', E_USER_ERROR);

// 模拟语法错误
//var_d;

// 模拟Notice错误
//echo $f;

// 模拟Warning错误
echo '123';
ob_flush();
flush();
header("Content-type:text/html;charset=gb2312");