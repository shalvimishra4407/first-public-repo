<?php

//echo "<pre>";
//print_r($_FILES);
$files_arr = $_FILES['attachment'];

$name = $files_arr['name'];
$type = $files_arr['type'];
$error = $files_arr['error'];
$tmp_path = $files_arr['tmp_name'];
$size = $files_arr['size'];

$file_info = pathinfo($name);
$extension = $file_info['extension'];
$filename = $file_info['filename'];
$err_msg ='';
if($error==0){
	$new_file = $filename."_".time().".".$extension;
	$new_location = __DIR__.'/uploads/{$new_file}';
	if(move_uploaded_file($tmp_path, $new_location)){
		echo 'File uploaded successfully';
	}else{
		echo 'Oops something went wrong';
	}
}else{
	$err_msg = 'Error Occured while uploading file !!';
}
echo $err_msg;

?>