<?Php
// wap in php to show new doc string syntax

$a=100;
echo <<<'BLOCK'
this is a Here Doc String. $a \n
"This is again New Line of String "$a" "
'This string is inside $a single qoutes \t tabbed ' = $ab

BLOCK;

$a=100;
$code=<<<'BLOCK'
this is a Here Doc String. $a \n
"This is again New Line of String "$a" "
'This string is inside $a single qoutes \t tabbed ' = $ab

BLOCK;

echo $code;


?>