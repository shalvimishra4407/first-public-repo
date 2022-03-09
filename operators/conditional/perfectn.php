<?php
//wap in php to find perfect number
$n=readline("Enter the number");
$sum=0;
for($i=1;$i<$n;$i++){
	if($n%$i==0){
		
		$sum = $sum +$i;
	}
}
if($sum==$n){
	echo 'No is perfect';
}
else{
	
	echo 'No is not perfect';
}
?>