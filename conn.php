<?php
session_start();
$conn = mysqli_connect("localhost:3308","root","","crud")or die ("connection failed");
$email=$_POST['email'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$gender =$_POST['gender'];
$country =$_POST['country'];
$err = "";
function validation ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};
if (isset($_POST['submit']))
    {

        if (validation($_POST['fname']) == '')
        {
            $err = "Please enter your first name!<br />";
        }
        else if (validation($_POST['lname']) == '')
        {
                        $err = "Please enter last name!<br />";
        }
        else if(validation($_POST['email'] == '')) 
        {   
            $err = "Please enter your email!<br />"; 
        }
        else if(validation($_POST['password']) == '')
        { 
                         $err = "Please enter your password!";
        }  
        else if (validation($_POST['cpassword']) == '')
        { 
                         $err = "Please confirm your password!";
        }  
        else if (validation($_POST['cpassword']))
        {   
            $password = $_POST['password'];
            $confirm = $_POST['cpassword'];
            if ($cpassword != $password) {
            $err = "Your passwords does not match!<br />";
            }
        }
        else if($_POST['gender'])
        { 
                        $err = "Please select your gender!";
        } 
		$query_mail = "SELECT * FROM students WHERE email='$email'";
	if(mysqli_num_rows(mysqli_query($conn,$query_mail))>0){
		$err = "email already exist";
	}
        $msg = 'Data is fine and sent!';

        };

if($err){
	$_SESSION["error"] = $err;
	header("location: march7.php");
	exit;
}

$sql ="INSERT INTO students(email,password,cpassword, fname,lname,gender, country) VALUES('{$email}','{$password}','{$cpassword}','{$fname}','{$lname}', '{$gender}', '{$country}')";
$result = mysqli_query($conn, $sql)or die ("QUERY failed");
header("location: show.php");
?>