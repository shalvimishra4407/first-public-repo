<?php
//wap in php to show var-to-var reference.

$x = '10'; //Normal variable
echo $x; //Normal variable
echo PHP_EOL;

$Y='ravi';// string value
echo $y;
echo PHP_EOL;
$ravi = 50;
echo $ravi;

echo PHP_EOL;

$z = 'chaman';
$$z = 500; // $($z)=500
printf("The value of chaman =%s", $chaman);
echo PHP_EOL;

$w="_100";
$$w='king';

printf("the value of w =%s \n", $w);
printf("the value of w =%s \n", $$w);
printf("the value of w =%s \n", $_100);

$exp = 'x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo $$exp;

echo PHP_EOL;

$student['name'] = 'suraj';
$student['class'] = 'Btech';
foreach($student as $key => $value){
	$$key=$value;
	printf("%s : %s \n", $key,$value);
	
}

echo $name;
echo PHP_EOL;
echo $class;

echo 'without using variable to variable';
echo PHP_EOL;

$car['name']='Maruti';
$car['class'] = 'A class';
$car['price'] = '5.5 lakhs';

printf("The name of car:%s \n", $car['name']);
printf("The class of car:%s \n", $car['class']);
printf("The price of car:%s \n", $car['price']);

extract($car);

printf("The name of car:%s \n", $name);
printf("The class of car:%s \n", $class);
printf("The price of car:%s \n", $price);
?>