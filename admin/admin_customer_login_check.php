<?php 

require_once('../config.php');
$email = $_POST['email'];
$password = $_POST['password'];
$select = " SELECT * FROM `crm_customer_user` where email='$email' && password='$password' ";

$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) 
{
	session_start();
	 while($res=mysqli_fetch_assoc($query))
	 {
	 	$_SESSION['customer_id']=$res['customer_id'];
	 	$_SESSION['customer_name']=$res['customer_name'];
	 }
	// print_r($_SESSION);
	 //die;

	header("Location:admin_view_customer.php");  // insert customer
}
else
{
	header("Location:admin_add_customer.php?error_msg=1");
}

 ?>