<?php
//
$x=readline("Enter the alpha numeric character...");
(getType(($x=='string') && ($x==number))and (ctype_alnum($x)))?:exit('Invalid value supplied');
switch($x){
	case 0:
	echo 'yes...THIS IS APLPHANUMERIC..\n';
break;
default:
echo 'Error...';
}
?>