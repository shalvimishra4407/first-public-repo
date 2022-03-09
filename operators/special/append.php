<?php
// wap in php to show append operation in string 

$name='ravi';
$Lname='kumar Mishra';

$name = $name.$Lname;
echo $name;

echo PHP_EOL;

$name='ravi';
$Lname='Kumar Mishra';
$name.=$Lname; //concate
echo $name;
echo PHP_EOL;
$name.=$lname; //append
echo $name;

?>