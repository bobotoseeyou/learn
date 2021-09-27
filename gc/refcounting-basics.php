<?php
//引用计数
//zval变量容器
//is_ref表示是否是引用集合
//refcount 用zval变量容器的变量个数
$aa = 'bobo';
$bb = $aa;            //传值赋值
$cc = &$aa;           //引用赋值
//$dd = &$aa;
$aa = 'gougou';
var_dump($aa,$bb,$cc);
//string(6) "gougou"
//string(4) "bobo"
//string(6) "gougou"
xdebug_debug_zval('aa');    //refcount=2, is_ref=1='gougou'
xdebug_debug_zval('bb');    //refcount=1, is_ref=0='bobo'
xdebug_debug_zval('cc');    // (refcount=2, is_ref=1)='gougou'
//xdebug_debug_zval('dd');
unset($aa);
var_dump($aa,$bb,$cc);
//bb - string(4) "bobo"
//cc - string(6) "gougou"
xdebug_debug_zval('aa'); //cc: (refcount=1, is_ref=0)='gougou'
xdebug_debug_zval('bb');//bb: (refcount=1, is_ref=0)='bobo'
xdebug_debug_zval('cc');
//xdebug_debug_zval('dd');


//$array = [
//    'name' => 'bobo',
//    'age' => '30',
//];
//xdebug_debug_zval('array');
//$array[] =&$array;
//xdebug_debug_zval('array');
//var_dump(memory_get_usage());
//var_dump(memory_get_peak_usage());
//$z = 1;
//xdebug_debug_zval('z');