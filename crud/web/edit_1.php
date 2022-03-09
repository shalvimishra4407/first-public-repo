<?php include_once __DIR__ . "/function.php"; 
include_once __DIR__."/query_builder/Query.php";
$id=get('id');
// echo $id;
if(!empty($id)){
    $query=new Query();
    $record=$query->select('*')->table('emp')->where('id',$id)->first();
}

?>

<html>

<head></head>

<body>

    <form action="<?php echo url("updateHandler.php"); ?>" method="post">
        Name:<input type="text" name="name" value="<?php echo  $record->name; ?>" /><br /><br />
        <input type="hidden" name="id" value="<?php echo  $record->id; ?>" />
        Email<input type="email" name="email" value="<?php echo $record->email; ?>" /><br /><br />
        <input type="submit" value="Update" name="save">

    </form>
</body>


</html>