<?php
//wap in php to show modify operators
$x = 10;
$x=$x+1;
echo "The value of x without assignment Operator : $x \n";

$x=10;
$x+=1;
echo "The value of x with assignment Operator : $x \n";

$x=10;
$z=$x++;
echo "The value of x using Post Increment Operator : $x and $z \n";

$x=10;
$z=++$x;
echo "The value of x using pre increment Operator : $x and $z \n"; 
$result = 'The sum is =';
echo $result.($x+$y);

?>