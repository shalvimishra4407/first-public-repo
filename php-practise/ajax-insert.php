<?php
$first_name=$_POST['fname']
$last_name=$_POST['lname']
$conn =mysqli_connect("localhost:3308", "root", "", "test")or die("connection failed");
$sql ="INSERT into students(f_name, l_name) VALUES ('{$first_name}', '{$last_name}')";
//$result =mysqli_query($conn,$sql)or die("SQL QUERY FAILED.");
if(mysqli_query($conn,$sql)){
	echo 1;
}else{
	echo 0;
}
?>