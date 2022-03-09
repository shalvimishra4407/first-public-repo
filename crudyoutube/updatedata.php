<?php
echo $upid = $_POST['id'];
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];
echo $mobile = $_POST['mobile'];
$conn = mysqli_connect("localhost:3308","root","","crud") or die("connection failed");

$sql = " UPDATE crudtable SET name ='{$name}', email = '{$email}', password= '{$password}', mobile = '{$mobile}' WHERE id ={$upid}";
$result = mysqli_query($conn,$sql) or die("UNSUCCESSFULLY CONNECTION");

header("location: http://localhost:786/php/crudyoutube/display.php");
mysqli_close($conn);

?>