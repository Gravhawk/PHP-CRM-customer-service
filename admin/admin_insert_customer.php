<?php 

require_once('../config.php');


$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$password = $_POST['password'];


$select = " SELECT * FROM crm_customer_user where email= '$email'  ";
$query = mysqli_query($conn , $select);

if(mysqli_num_rows($query)>0)
{
	header('location:admin_add_customer.php');
}

else
{
$insert = " INSERT INTO crm_customer_user (customer_name,email,password) values ('$customer_name','$email','$password'  ) ";
mysqli_query($conn , $insert);
header("Location:admin_view_customer.php");
}
 ?>