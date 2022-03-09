<?php
//wap in php to show problem with dynamic nature of /

$x=readline('enter the x value:');
$y=readline('enter the y value:');

printf('The division =%d \n', $x/$y);
printf('The division =%f \n', $x/$y);
echo "The division = ";
echo $x/$y;

echo PHP_EOL;
echo "The remainder";
echo $x%$y;
?>