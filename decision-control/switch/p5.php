<?php
//wap in php to show vowels and consonants with multi-case

$x = readline("Enter the character :");
(getType($x=='string')and strlen($x)==1 and ctype_alpha($x))?:exit('Invalid value supplied.');
$output='';
switch($x){ 
case 'a':
case 'A':
	$output='vowel';
break;
case 'e':
case 'E':
	$output='vowel';
break;
case 'i':
case 'I':
	$output='vowel';
break;
case 'o':
case 'O':
	$output='vowel';
break;
case 'u':
case 'U':
	$output='vowel';
break;
default:
$output='consonant';
break;
	
	
}
echo $output;
// T(A)-->26-->T(A)=(V,C)-->T(A) = {{a,e,i,o,u},C}