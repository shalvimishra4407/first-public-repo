<?php
// wap in php to show odd and even using switch

$x=readline("Enter The x Value:");
switch($x%2){ //coins = {H,T} S = {0,1} 
	
case 0:
echo "$x is even";	
	break;
	
	case 1:
	echo "$x is odd";
	break;
}