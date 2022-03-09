<?php
//wap in php to check a array is homogenous or hetrogenous
//wap a program to show argv is always homogenous

function is_homo($array=[]){
	$key_type = getType($array[0]);
	//echo $key_type;
	for ($i=0; $i<count($array); $i++){
	if($key_type===getType($array[$i])){
		
	}	
	else{
		
			return false;
	}	
	}
	return true;


}
var_dump(is_homo($argv));                                                                                                           	
var_dump(is_homo([10,20,30,40]));
var_dump(is_homo([10,12.3,true,false,'shalvi',]));
var_dump(is_homo(['shalvi','harshit','tanushit']))

?>