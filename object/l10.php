<?php
$v1 = 2;
$v2 = 'abcd';
$v3 = array('a' =>1,'b' =>2,'c' => 3);
//序列化
$str1 = serialize($v1);
$str2 = serialize($v2);
$str3 = serialize($v3);
var_dump($str1);
var_dump($str2);
var_dump($str3);
//反序列化
var_dump(unserialize($str1));
var_dump(unserialize($str2));
var_dump(unserialize($str3));

