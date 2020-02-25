<?php 

require_once("../config.php");

$employee_id = $_POST['employee_id'];
$employee_name=$_POST['employee_name'];
$email= $_POST['email'];
$password=$_POST['password'];

$update = " UPDATE `crm_employee_user` set employee_name='$employee_name', email='$email',password='$password' where employee_id=$employee_id";
mysqli_query($conn,$update);
header('location:admin_view_employee.php');

 ?>