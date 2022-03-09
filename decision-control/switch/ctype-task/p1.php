<?php
//
$x=readline("Enter the character...");

switch($x){
	case (ctype_alpha($x)):
	echo 'yes...THIS IS APLPHA..\n';
break;
default:
echo 'Error...';
}
?>