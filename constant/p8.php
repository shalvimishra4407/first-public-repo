<?php
// wap in php to show constants are global inside class

define ('GRAVITY',10);
printf("the value of GRAVITY AT GLOBAL SCOPE : %d \n", GRAVITY);

$gravity=9.8;
printf("The value of gravity AT GLOBAL SCOPE :%d \n", $gravity);


class test{
	private $g;
	private $G;
	
	public function __construct(){ //constructor
		
		$this->G = GRAVITY;
		$this->g = $gravity; //local variable $gravity ---> assign g
		
	printf("the value of GRAVITY inside method : %d \n", GRAVITY);//constant
    printf("The value of gravity inside method :%d \n", $gravity);//undefined variable g
	printf("The value of gravity using g for class :%d \n", $this->g);//undefined variable g
	printf("The value of gravity using G for class :%d \n", $this->G);
}
}
$test = new test();
?>