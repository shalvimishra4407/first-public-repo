<?php
// wap in php to show odd and even using default case in switch

$x=readline("Enter The x Value:");
switch($x%2){ // s(remainders)={0,1}  T(cases) = 2 1-> default (n-1) --->case
	
case 0:
echo "$x is even";	
	break;
	
default:
	echo "$x is odd";
	break;
}