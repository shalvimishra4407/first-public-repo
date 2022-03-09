<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$conn = mysqli_connect("localhost:3308","root","","crud") or die("connection failed");

$sql = "INSERT into crudtable(name, email, password, mobile) VALUES ('{$name}', '{$email}', '{$password}' , '{$mobile}')";
$result = mysqli_query($conn,$sql) or die("UNSUCCESSFULLY CONNECTION");

header("location: http://localhost:786/php/crudyoutube/reg.html");
mysqli_close($conn);

?>