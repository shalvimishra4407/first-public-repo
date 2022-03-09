<?php
//wap in php to show class and objects in php

class Tv{
	
	var $model ='XL TV';
	var $type ='LED';
	var $price =50000;
	var $color = 'black';
	var $varient = 'Curved';
	
	public function showInformation(){
		echo "The Model for ".__CLASS__." {$this->model}\n";
		echo "The type for ".__CLASS__." {$this->type}\n";
		echo "The price for ".__CLASS__." {$this->price}\n";
		echo "The color for ".__CLASS__." {$this->color}\n";
		echo "The varient for ".__CLASS__." {$this->verient}\n";
	}
	public function volume(){
		echo "Volume Up";
	}
}
$tv = new Tv();//objects
$tv->showInformation();//method calling or method calling
echo "Tv Volume will be:";
echo "{$tv->volume()}";
echo "\n";
echo "Tv Volume will be:{$tv->volume()}";
?>