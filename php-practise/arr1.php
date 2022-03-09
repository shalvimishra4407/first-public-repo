<?php
$arr = ["shalvi",123,"smita",12.3];
/*
echo $arr[0]."<br>";
echo $arr[1]."<br>";

echo $arr[2]."<br>";
echo $arr[3];*/
/*echo "<pre>";
print_r ($arr);
echo "</pre>"*/
echo "<ul>";
for ($i =0; $i<4; $i++){
    echo "<li> $arr[$i] </li>";
}
echo "</ul>";

?>