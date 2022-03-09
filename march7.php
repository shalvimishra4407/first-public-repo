<?php
session_start();
//print_r($_SESSION);
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
div{
min-height:400px;
width:400px;
border:2px solid black;
margin: 80px auto;
padding:20px;
}
</style>

</head>
<body>

<div class="container">
<h3 style="color:red;text-align:center;"><?php if(isset($_SESSION["error"])){echo $_SESSION["error"]; unset($_SESSION["error"]);}?></h3>
<h1>REGISTRATION FORM</h1>

<form action="conn.php" method="post" name="form" >
<b>Email:<b><br><input type="email" name="email"><br>
<b>Password:<b><br><input type="password" name="password"><br>
<b>Re-Type password:</b><br><input type="password" name="cpassword"><br>
<b>First Name:<b><br><input type="text" name="fname" required><br>
<b>Last Name:<b></br><input type="text" name="lname" required><br>
<b>Gender:<b></br> <input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br>
Country:<select name="country">
<option>---select country---</option>
<option>USA</option>
<option>INDIA</option>
<option>PAKISTAN</option>
<option>CANADA</option>
<option>AMERICA</option>
</select><br><br>
<input type="checkbox" name="remember" value="allow">Accept all conditions and terms<br>
<input type="submit" name="submit" value="Resister">
</form>
</div>
</body>
</html>