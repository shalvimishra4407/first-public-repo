<?php

//wap in php to show perfect no. using recurtion
$n=readline('enter the n value:');
if(is_perfect($n)){
	
	echo "$n is perfect no.";
	
	
}
else{
	
	echo "$n is not perfrct no.";
}
function is_perfect($n,$i=1,$sum=0){
	
	if($i==$n){
		return false;
	}else{
		if($n % $i==0){
			$sum = $sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}
}








?>