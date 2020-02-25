<?php
require_once('../config.php');
$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$select = " SELECT * FROM crm_customer_user where email= '$email'  ";
$query = mysqli_query($conn , $select);
if(mysqli_num_rows($query)>0)
{
	header('location:customer_signup.php?error_msg=1');
	session_start();
	while($res=mysqli_fetch_assoc($query))
	{
		// $_SESSION['customer_id']=$res['customer_id'];
		$_SESSION['email']=$res['email'];
	}
}
else
{
$insert = " INSERT INTO crm_customer_user (customer_name,email,password) values ('$customer_name' , '$email' , '$password') ";
mysqli_query($conn , $insert);
header("Location:customer_signin.php");
}
?>