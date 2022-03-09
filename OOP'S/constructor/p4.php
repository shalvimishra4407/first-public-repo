<?php
//wap in php to show non-parameterised constructor

class Test{
	
	public function __construct(){
		echo 'Constructor is running....';
	}
}
$test1 = new Test;
$test2 = new Test();
$test1->__construct();
$test2->__construct();

?>