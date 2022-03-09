<?php
//wap in php to find the reverse numbers using while
$n=readline("Enter a NUmber:");
$count=strlen($n);

$sum =0;
while($n!=0){
	$q = $n/10;
	$rem =$n%10;
	$ef=$rem *(pow(10,$count-1));
	$sum = $sum+$ef;
	$n=$q;
	$count--;
	
}
echo $sum;
?>