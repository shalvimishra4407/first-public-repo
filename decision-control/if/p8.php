<?php

//wap in php to show odd and even using single if
$output='Odd';
$n=readline('Enter The Number:');

if($n%2==0){
	$output='Even';
}
echo $output;