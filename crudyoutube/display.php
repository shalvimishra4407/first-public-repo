
<!DOCTYPE HTML>
<html>
    <head>
    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
<div id="main-content">
<h1 style="text-align: center; color:blue">DISPLAY TABLE DATA</h1>
<?php
$conn = mysqli_connect("localhost:3308", "root", "", "crud")or die("connection failed");
$sql = "SELECT * FROM crudtable ";
$result = mysqli_query($conn, $sql)or die("query unsuccessfull");
?>
<table style="width:100% ; text-align: center; " cellspacing='0px' cellpadding='10px' border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PASSWORD</td>
        <td>MOBILE</td>
        <td>DELETE</td>
        <td>UPDATE</td>
    </tr>
     <?php
     if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
   ?>
  <tr class="text-center">
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['password'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td>
        <a href='delete.php?id=<?php echo $row['id']; ?>'class="text-primary">DELETE</a></td>
        <td><a href='update.php?id=<?php echo $row['id'];?>'class="text-primary">UPDATE</a>
    </td>
    </tr>  
    <?php
    }
    ?> 
</table>
<?php
    }
    ?>
         </div>
        </div>
    </body>
</html>