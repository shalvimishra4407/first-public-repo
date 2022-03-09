<?php 
// wap in php to show, floating point numbers

$x=011;// octal
echo $x;
echo PHP_EOL;
#$a = 08; //Invalid Numerical literal (conversion to octal range not possible)
#echo $a;

$b = 10.5;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c=10.0;
echo $c;

echo PHP_EOL;
$d=10.000;
echo $c;
echo PHP_EOL;
echo getType($c);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);


echo PHP_EOL;
$z=0.5;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);



echo PHP_EOL;
$w=.5;
echo $w;
echo PHP_EOL;
echo getType($w);
echo PHP_EOL;
var_dump($w);

echo PHP_EOL;
$p='a';
$p.=$w;
echo $p;
echo PHP_EOL;
echo getType($p);

echo PHP_EOL;
$marks = 9.99999999999999;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);



echo PHP_EOL;
$marks = 9.9999999999959;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);


echo PHP_EOL;
$marks = 9.99999999939;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);



echo PHP_EOL;
$marks = 9.9999999999;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);


echo PHP_EOL;
$m=9.999993; //within the range
echo $m;
echo PHP_EOL;
echo getType($m);
echo PHP_EOL;
var_dump($m);


echo PHP_EOL;
printf("%.2f",$m);
?>