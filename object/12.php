<?php
class a {
	static protected $test =  'class a';
	public function calls_a()
	{
		var_dump(static::$test);
		var_dump(self::$test);
	}
}
class b extends  a {
	static protected $test =  'class b';

	public function calls_b()
	{
		/**
		 * static::$test  如果有继承的话 默认调用当前类 ，否则调用的是自身
		 * self::$test    如果有继承的话，默认调用父类，否则调用自身
		 */
		var_dump(static::$test);
		var_dump(self::$test);
	}

}
$obj = new b();
$obj->calls_a();
$obj->calls_b();
//string(7) "class b"
//string(7) "class a"
//string(7) "class b"
//string(7) "class b"