<?php
//wap in php to show method in php
// any function inside class becomes method
class Test{
	
	function demo(){
		echo 'I am a  demo function';
	}
}
$test = new Test();
$test ->demo();