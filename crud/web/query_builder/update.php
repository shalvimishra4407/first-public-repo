<?php
require_once __DIR__.'/DB.php';
//this is query connection file
class Query extends DB{
	public $sql;
	public function update($tablename, $formdata=[]){
		$columns = implode(",",array_keys($formdata));
		$values = implode(" ','",array_values($formdata));
		$SQL = "UPDATE {$tablename} SET {$columns} values {'$values'};";
		$this->sql =$SQL;
		return $this;
	}
	public function getQuery(){
		return $this->sql;
		
	}
} 
$query = new Query();
echo $query->update('emp',[
'name'=>'tanu',
'email'=>'tanu@gmail.com',
'password'=>'harshit',
'mobile'=>'6868658466',
'dob'=>'29-june-2001'
])->getQuery();