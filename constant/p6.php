<?php
//wap in php to show , different b/w predefined error level and user defined error level.

error_reporting(E_NOTICE);
printf("the value of true : %d \n", true);
printf("the value of true : %d \n", TRUE);
printf("true is incase-sensitive constant : %d \n",(TRUE==1));
define('true',10,1);
printf("the value of true after reclaration : %d \n ",true);

?>