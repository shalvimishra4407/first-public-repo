<?php
//Surpress Operator @: supress operator or notice : error operator.
//never use @operator because, debugging is important.

$x=20;
echo "the value of x: $x"; //20

echo PHP_EOL;
echo "The value of y:" .@$y; //undefined variable y.
$z=10;
isset($z)?10:null;
echo PHP_EOL;
echo "The value of z using ternay:" .$z; //undefined variable z.
var_dump($z);
isset($z)??null;
echo PHP_EOL;
echo "The value of x:" .$z; //undefined variable z.
var_dump($z);

$p =(5<2)??null;
echo PHP_EOL;
var_dump($p);
if($p){
	echo 'P is running by Nullcoalescing';
}else{
	echo 'P else running by nullcoalescing';
}

$p =(5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'P is running by ternary';
}else{
	echo 'P else running by ternary';
}