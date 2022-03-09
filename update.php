<!DOCTYPE HTML>
<html>
    <head>
	<style>
	#main-content{
		margin:100px auto;
		height:400px;
		width:400px;
		border:2px solid;
		padding: 10px;
	}
	</style>
	</head>
    <body>
        <div id="main-content">
            <h2 style="text-align:center">UPDATE RECORD</h2>
            <?php
       $conn = mysqli_connect("localhost:3308", "root", "", "crud")or die("connection failed");
       $upid= $_GET['id'];
       $sql = "SELECT * FROM students where id = {$upid}";
       $result = mysqli_query($conn, $sql)or die("query unsuccessfull");
       if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){

?>
<form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
        <label>Email:</label>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
        <input type="email" name="email" value="<?php echo $row['email'];?>"/>
    </div><br>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $row['password'];?>"/>
    </div><br>
    <div class="form-group">
        <label>Confirm PASSWORD:</label>
        <input type="password" name="cpassword" value="<?php echo $row['cpassword'];?>"/>
    </div><br>
    <div class="form-group">
        <label>First Name:</label>
        <input type="name" name="fname" value="<?php echo $row['fname'];?>"/>
    </div><br>
	<div class="form-group">
        <label>Last Name:</label>
        <input type="name" name="lname" value="<?php echo $row['lname'];?>"/>
    </div><br>
	<div class="form-group">
	<label>Country:</label>
	 <select name="country">
        
         <option>---select country---</option>
         <option>USA</option>
         <option>INDIA</option>
         <option>PAKISTAN</option>
        <option>CANADA</option>
       <option>AMERICA</option>
</select><br><br>
    </div>
    <input class="submit" type="submit" value="update"/>
</form>
<?php
        }
    }
?>
        </div>
    </body>
</html>
