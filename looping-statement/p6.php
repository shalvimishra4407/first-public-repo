<?php
//wap in php to find the reverse numbers
$n=readline("Enter a NUmber:");
$count=count(str_split($n));

$sum =0;
for(;$n!=0;$count--){
	$q = $n/10;
	$rem =$n%10;
	$ef=$rem *(pow(10,$count-1));
	$sum = $sum+$ef;
	$n=$q;
	

}
echo $sum;
?>