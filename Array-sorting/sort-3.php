<?php error
//wap is php to show sort and krsort in key

$a = ['10'=>'a', '100'=>'c', '5'=>'b'];
print_r($a);
ksort($a);
print_r($a);
krsort($a);
print_r($a);