<?php
//wap in php to show destructor
class Test{
	public $a;
	public function __construct(){
		$this->a =10;
		echo 'called constructor Autometically';
		echo PHP_EOL;
	}
	public function wish(){
		echo 'Hy Good Morning....' .PHP_EOL;
	}
	public function __destruct(){
		echo 'called destructor autometrically';
		echo PHP_EOL;
		unset ($this->a);
		$this->show_a();
	}
	public function show_a(){
		echo "The value of a after destructor called :".$this->a;
		
	}
}
$test = new Test();
echo $test->a;
$test->wish();
echo $test->a;
?>