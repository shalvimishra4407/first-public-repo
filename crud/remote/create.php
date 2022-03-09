<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';
#step2 : prepare the Query
$tname = readline('Enter table name:');

$sql = "create table {$tname}(
id int primary key,
F_name varchar(50) default '---',
L_name varchar(50) ,
mobile varchar(20),
email varchar(50) not null
)";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

