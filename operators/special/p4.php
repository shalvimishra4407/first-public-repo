<?php
// wap in php to + operation in array with duplicate subscript

$x=[10,20,30,'ravi'];

$y[4]=100;
$y[5]=200;
$y[6]=300;
$y[7]=300;

echo PHP_EOL;

var_dump(count($x)==count($y));
print_r($x);
print_r($y);

print_r($x+$y);
print_r($y+$x);
print_r(($x+$y)==($y+$x));

incomplete
?>