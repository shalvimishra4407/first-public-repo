<?php
//wap is php to show sort and krsort in associative array values

$a = ['10'=>'a', '100'=>'c', '5'=>'b'];
print_r($a);
asort($a);
print_r($a);
krsort($a);
print_r($a);