<?php
include_once __DIR__."/function.php";
include_once __DIR__."/query_builder/Query.php";
$name=post('name');
$email=post('email');
 //echo $name;
 //echo $email;
$query = new Query();
if($query->insert('emp',[
    "name"=>$name,
    "email"=>$email,
]))
{
    echo "data insrted with PK=".$query->getId();
}
else{
    echo "Insert Error....";
}

?>