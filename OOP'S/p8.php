<?php

//wap to show class and object 
class Tv{
	
	public $color ='black';
	public $size='56 inch';
	public $price=250000;
	public $type='LED';
	public $company='LG';
	
	public function info(){
		
		echo "The color : {$this->color}\n";
		echo "The size : {$this->size}\n";
		echo "The price : {$this->price}\n";
		echo "The type : {$this->type}\n";
		echo "The company : {$this->company}\n";
	}
	public function on(){
		echo "Tv on \n";
	}
	public function off(){
		echo "Tv off \n";
	}
	public function volup(){
		echo "valume ++ \n";
	}
	public function voldown(){
		echo "valume -- \n";
	}
}
(new Tv)->info(); //anonymous object
(new Tv)->volup();  //anonymous object
(new Tv)->voldown();  //anonymous object

$remote1 = new Tv; //reference object
$remote1->info(); //reference object
$remote1->volup(); //reference object
$remote1->voldown(); //reference object

$remote2 = new Tv; //reference object
$remote2->info(); //reference object
$remote2->volup(); //reference object
$remote2->voldown(); //reference object
?>