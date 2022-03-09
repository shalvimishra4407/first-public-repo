<?php
//wap in php to show variables and methods in php

class Test{
	var $a=10;
	var $b=20;
	function add(){
		$a=100;//stack
		$b=200;//stack
		echo $a+$b;
		echo "\n";
		
		///$test = new Test;
		
		echo 'This is a Add function'.PHP_EOL;
		echo $this->a + $this->b;
		echo PHP_EOL;
		var_dump($this);
	}
}
$test = new Test;
$test->add();
var_dump($test);

?>