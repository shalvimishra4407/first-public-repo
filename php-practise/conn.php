<?php
echo $name = $_POST['$name'];
echo $email = $_POST['$email'];
echo $password = $_POST['password'];
$conn = mysqli_connect("localhost:3308", "root", " ", "crud") or die("connection failed");

$sql = "INSERT into crud(name,email, password) VALUES ('{$name}', '{$email}', '{$password}')";
$result = mysqli_query($conn,$sql) or die("UNSUCCESSFULLY CONNECTION");

header("location: http://localhost:786/php-practise/reg.html");
mysqli_close($conn);

?>