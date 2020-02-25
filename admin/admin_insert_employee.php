<?php 

require_once('../config.php');


$employee_name = $_POST['employee_name'];
$email = $_POST['email'];
$password = $_POST['password'];


$select = " SELECT * FROM crm_employee_user where email= '$email'  ";
$query = mysqli_query($conn , $select);

if(mysqli_num_rows($query)>0)
{
	header('location:admin_add_employee.php');
}

else
{
$insert = " INSERT INTO crm_employee_user (employee_name,email,password) values ('$employee_name','$email','$password'  ) ";
mysqli_query($conn , $insert);
header("Location:admin_view_employee.php");
}
 ?>