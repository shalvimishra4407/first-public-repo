<?php
//wap in php to find odd and even using single if

$output=['even','odd'];
$n =readline('Enter the number:');
echo $output[$n%2];