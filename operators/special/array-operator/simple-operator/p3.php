<?php
// wap in php to + operation in array with duplicate subscript

$x=[10,20,30,'ravi'];

$y[4]=100;
$y[5]=200;
$y[6]=300;
$y[7]=300;

echo 'The count of x'.count($x);
echo PHP_EOL;
echo 'The count of y'.count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x+$y);//unique
print_r($y+$x); //unique

var_dump(($x+$y)==($y+$x));//equal
var_dump(($x+$y)===($y+$x));//equal and identical
var_dump(($x+$y)===($x+$y));//equal and identical
var_dump(($y+$x)===($y+$x));//equal and identical
?>