<?php
/*
$a = array("name"=>"shalvi","age"=>45,);
echo $a["name"];*/
$age = [

    "diksha" => 67,
    "shalvi" => 45,
    "tanu" => 56
];

$age["shalvi"]= 30;
echo "<pre>";
var_dump($age);
echo "</pre>";
echo $age["diksha"]."<br>";
echo $age["shalvi"]."<br>";
echo $age["tanu"]."<br>";
?>