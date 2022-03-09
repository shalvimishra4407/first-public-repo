<?php
//public Modifiers

class Tatoo{
	
	public $location = 'hand';
	
	public function __construct(){
		echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";
	}
}
class parent{
	
	public function __construct(){
	echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";	
	}
}
class friend{
	public function  __construct(){
	echo "Access by ".__CLASS__." of mindi in the class {$this->location} \n";	
	}
	
}
class husband extends Tatoo{
	public function  __construct(){
		
	}
	
}

$tatoo = new Tatoo();
echo "Access from Outside the scope of class {$this->location} \n";