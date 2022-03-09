<?php
// Wap in php to show Here Doc string syntax
$a= 100;

echo<<<BLOCK
this is a Here Doc String. $a \n
"This is again New Line of String "$a" "
'This string is inside $a single qoutes \t tabbed ' = $ab

BLOCK;

echo $html;
$html = <<<ANYBLOCK
this a Here Doc String , $a \n
    "This is again New Line of String "$a" "
'This string is inside $a single qoutes \t tabbed ' = $ab


ANYBLOCK;
?>