<?php 
include_once __DIR__.'/query_builder/Query.php';
include_once __DIR__.'/function.php';


$query = new Query();
$records = $query->select('*')->table('emp')->allRecords();

 ?>
 
<!DOCTYPE html>
<html>
<head>

    <title>Show Records</title>
</head>
<body>
    <table style="width:100% ; text-align: center;" cellspacing='0px' cellpadding='10px'   border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit1</th>
			<th>Edit2</th>
			<th>Delete 1</th>
            <th>Delete 2</th>
        </tr>
        <tr>
            <?php foreach ($records as $row):  ?>
            
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><a href="<?php echo url("edit_1.php?id={$row->id}");?>">Edit-1</a></td>
            <td><a href="<?php echo url("edit_2.php?id={$row->id}");?>">Edit-1</a></td>
            <td><a href="<?php echo url("delete_1.php?id={$row->id}");?>">delete-1</a></td>
            <td><a href="javascript:confirmDelete('<?php echo $row->id?>');">Delete 2</a></td>
        </tr>
    <?php  endforeach; ?>
    </table>
    <script>
      function confirmDelete(id)
      {
          if(window.confirm("are you sure to delete ?")){
              window.location.href="<?php echo url('delete_2.php?id=')?>"+id;
          }
      }
    </script>
</body>
</html>