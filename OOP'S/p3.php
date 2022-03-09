<?php
//wap in php to show , object

class Test{
	var $a=10;
	var $b=20;
	var $c=30;

}
$test = new Test(); //Instantiation // heap memory
var_dump($test);
$test = Test(); //Assignment // stack memory
var_dump($test);
$test = 10; //Assignment // stack memory
var_dump($test);

function Test(){
	return 'Hy From  Test Function';
}
?>