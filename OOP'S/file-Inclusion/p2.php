<?php
//p2.php

include 'p1.php';

echo PHP_EOL;
echo 'Code from p2.php';
$b = 100;
echo PHP_EOL;
echo $b;

echo 'value of a = $a from file p1.php';
echo PHP_EOL;
print_r(get_included_files());