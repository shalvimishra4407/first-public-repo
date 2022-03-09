<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <div id="main-content">
            <h2>UPDATE RECORD</h2>
            <?php
       $conn = mysqli_connect("localhost:3308", "root", "", "crud")or die("connection failed");
       $upid= $_GET['id'];
       $sql = "SELECT * FROM crudtable where id = {$upid}";
       $result = mysqli_query($conn, $sql)or die("query unsuccessfull");
       if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){

?>
<form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
        <label>NAME</label>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
        <input type="text" name="name" value="<?php echo $row['name'];?>"/>
    </div>
    <div class="form-group">
        <label>EMAIL</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>"/>
    </div>
    <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" name="password" value="<?php echo $row['password'];?>"/>
    </div>
    <div class="form-group">
        <label>MOBILE NO</label>
        <input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/>
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
