<?php
//wap in php to show no-return type constructor

class Test{
	
	public function __construct(){
		
		echo 'Constructor is called automatically...';
		echo PHP_EOL;
		return 10;
	}
}

#object creation
$test = new Test();
$test = new Test;
echo $test; //implicitly called and can not returned.
$x = $test->__construct(); //Explicitly called as method can be returned.
echo $x;
?>