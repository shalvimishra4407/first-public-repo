<?php
include_once __DIR__."/function.php";
include_once __DIR__."/query_builder/Query.php";
$name=post('name');
$email=post('email');
$id=post('id');
 //echo $name;
 //echo $email;
$query = new Query();
if($query->update('emp',[
    "name"=>$name,
    "email"=>$email,
])->where('id',$id)->commit())
{
    header("Location:".url('show.php?status=record-updated'));
}
else{
    echo "Update Error....";
}

?>