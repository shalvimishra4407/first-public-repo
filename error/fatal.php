<?php
//wap in php to show fatal error
//since we cannot re-declare the signature (or definition ) of function since it
//generates the fatal error , hence it is possible at least in php to 

function test(){
	echo 'Hello from test function'.PHP_EOL;
	
}
test();

//re-declaretion of test function
function test(){
	echo 'Hello from test function'.PHP_EOL;
}