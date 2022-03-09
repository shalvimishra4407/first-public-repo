<?php

//wap in php to magic constants :__FILE__ and __DIR__

echo "file stystem path:".__FILE__;
echo "\n";
echo "file stystem path :".__DIR__;
echo "\n";
echo "Before folder path is :".dirname(dirname(__DIR__));
echo "\n";
echo "Before folder path is :".dirname(dirname(dirname(__DIR__)));
echo "\n";
$laragon_path = dirname(dirname(dirname(__DIR__)));
echo "\n";
echo $laragon_path;
echo "\n";
echo "Different Path =".$laragon_path."\\"."cloner"."\\";
?>