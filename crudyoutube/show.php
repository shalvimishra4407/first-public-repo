<html>
    <head></head>
    <body>
        <h2 style="color:blueviolet; text-align:center">ALL RECORD SHOW</h2>
        <center>
    <table style="text-align:center" cellspacing=1px; cellpadding=20px; border="1">
        <?php 
         $conn =mysqli_connect("localhost:3308", "root", "", "crud")or die("CAN NOT CONNECTED");
         $sql ="SELECT * FROM tbl2";
         $result= mysqli_query($conn, $sql);
        ?>
        <tr style="border-collapse:collapse; border:1px solid black; padding:10px;">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        <?php
        if(mysqli_num_rows($result)>0){
            while($rows=mysqli_fetch_assoc($result)){
        ?>
        <tr style="border-collapse:collapse; border:1px solid black">
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['name'] ?></td>
            <td><?php echo $rows['email'] ?></td>
            <td><a href="delete.php? id=<?php $row['id']; ?>">DELETE</a></td>
            <td><a href="delete.php? id=<?php $row['id']; ?>">UPDATE</a></td>
        </tr>
<?php
}
?>
    </table>
</center>
    <?php
}
?>
    </body>
</html>