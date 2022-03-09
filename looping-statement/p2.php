<?php
//wap in php to find the reverse numbers
$n=readline("Enter a NUmber:");
$count=readline("Enter a Count:");

$sum =0;
for(;;){
	$q = $n/10;
	$rem =$n%10;
	$ef=$rem *(pow(10,$count-1));
	$sum = $sum+$ef;
	$n=$q;
	$count--;
	if($n==0){
		break;
	}
}
echo $sum;
?>