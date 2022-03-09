<?php
echo $name = $_POST['name'];
echo $email = $_POST['email'];
$conn = mysqli_connect("localhost:3308", "root", "", "crud")or die("connection failed");
$sql = "INSERT into tbl2(name, email) VALUES ('{$name}', '{$email}')";
$result = mysqli_query($conn, $sql)or die("can not connected");

header("location: http://localhost:786/php/crudyoutube/form.html");
mysqli_close($conn);
?>