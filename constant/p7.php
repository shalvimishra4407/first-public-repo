<?php
// wap in php to show constants are global 
define ('GRAVITY',10);
printf("the value of GRAVITY AT GLOBAL SCOPE : %d \n", GRAVITY);
//define('wife','katreena');
//printf("No one can , seperate Awnish from :%s \n", wife);
$gravity=9.8;
printf("The value of gravity AT GLOBAL SCOPE :%d \n", $gravity);
//$villan = 'Vickey Kaushal';
//printf("The only villan in Awnish life is :%s\n", $villan);

function test(){
	printf("the value of GRAVITY AL local SCOPE : %d \n", GRAVITY);
	//printf("No one can , seperate Awnish from :%s \n", wife);
	//printf("The only villan in Awnish life is :%s\n", $villan);
	printf("The value of gravity AT GLOBAL SCOPE :%d \n", $gravity);
}
test();
?>