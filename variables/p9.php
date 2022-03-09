<?php

// wap in php to show the different b/w null and undefined

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;
printf("the memory x= %d",memory_get_usage($x));
unset($x);
printf("the memory x = %d ",memory_get_usage($x));

echo PHP_EOL;
echo 'info about y';
echo PHP_EOL;

$y; // no memory
echo $y;
echo PHP_EOL;
var_dump($y);
var_dump(isset($y));
echo PHP_EOL;
printf("the memory y= %d",memory_get_usage($y));
unset($y);
printf("the memory y = %d ",memory_get_usage($y));

echo PHP_EOL;
echo 'info about z';
echo PHP_EOL;
$z=null; //memory
echo $z;
echo PHP_EOL;
var_dump($z);
var_dump(isset($z));
echo PHP_EOL;
printf("the memory z= %d",memory_get_usage($z));
unset($y);
printf("the memory z = %d ",memory_get_usage($z));


$conn = mysqli_connect('localhost:3308','root','','');
 var_dump($conn); #object --->resource

?>