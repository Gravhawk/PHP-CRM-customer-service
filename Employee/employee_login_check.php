<?php 

require_once('../config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$select = " SELECT * FROM `crm_employee_user` where email='$email' && password='$password' ";

$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) 
{
	session_start();
	 while($res=mysqli_fetch_assoc($query))
	 {
	 	$_SESSION['employee_id']=$res['employee_id'];
	 	$_SESSION['employee_name']=$res['employee_name'];
	 }
	// print_r($_SESSION);
	 //die;

	header("Location:employee_index.php");
}
else
{
	header("Location:employee_signin.php?error_msg=1");
}

 ?>