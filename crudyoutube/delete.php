<?php

$del = $_GET['id'];
$conn =mysqli_connect("localhost:3308","root","","crud");
$sql = "DELETE FROM crudtable WHERE id = {$del}";
$result = mysqli_query($conn, $sql)or die("connection failed");
header("Location: http://localhost:786/php/crudyoutube/display.php");
mysqli_close($conn);
?>