<?php
$numsddsad = [];
try {
    echo  $numsddsad['xxxx'];
}catch (Exception $exception){
    echo  $exception->getMessage();
    echo  $exception->getCode();
}
//结果啥都不输出
//因为Exception只能捕捉错误