<?php
// wap in php to show priority of local and global scope of variable

$a = 10;
echo "The value of at global scope is : $a";
echo PHP_EOL;

function display(){
	$b=20;
	global $a; // get the variable from heap
	echo "The value of global at local scope is : $a"; 
	echo PHP_EOL;
	echo "The value of local b at local scope is : $b";
	echo PHP_EOL;
	$a=300;
		echo "The value of local at local scope is : $a"; 
	echo PHP_EOL;
}
display();
echo PHP_EOL;
echo "The value of a at global scope is : $a";

?>