<?php
//wap in php to show parameterised constructor

class Test{
	
	public function __construct($name){
		echo $name;
	}
}
$test = new Test('HARSHIT');
?>