<?php
// wap in to show foreach
$data=[
[
'id' =>'1',
'name'=> 'piyush',
'class'=> '12th'
],
[
'id' =>'2',
'name'=> 'harshit',
'class'=> 'BSc'
],
[
'id' =>'3',
'name'=> 'Shikha',
'class'=> 'Ba'
],
];

foreach($data as $user){
	
	echo "------------------------\n";
	echo "user id = {$user['id']} \n";
	echo "user id = {$user['name']} \n";
	echo "user id = {$user['class']} \n";
	
	echo "------------------------\n";
}