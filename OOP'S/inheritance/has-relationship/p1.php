<?php
//has-relationship
class A{
public function ktm_bike(){
	echo 'This is KTM_BIKE....'.PHP_EOL;
}	
	
}
class B extends A{
	public function cycle(){
		
		echo 'This is a cycle....'.PHP_EOL;
	}
}
$b= new B();
$b->cycle();
$b->ktm_bike();


$a = new A();
$a->ktm_bike();
?>