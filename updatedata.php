<?php
echo $upid = $_POST['id'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];
echo $cpassword = $_POST['cpassword'];
echo $fname = $_POST['fname'];
echo $lname = $_POST['lname'];
echo $gender = $_POST['gender'];
echo $country= $_POST['country'];
$conn = mysqli_connect("localhost:3308","root","","crud") or die("connection failed");
$sql = " UPDATE students SET email = '{$email}', password= '{$password}', cpassword = '{$cpassword}', fname= '{$fname}',lname='{$lname}',gender='{$gender}',country='{$country}' WHERE id ={$upid}";
$result = mysqli_query($conn,$sql) or die("UNSUCCESSFULLY CONNECTION");
header("location: show.php");
mysqli_close($conn);

?>