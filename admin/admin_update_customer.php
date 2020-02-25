<?php 

require_once("../config.php");

$customer_id = $_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$email= $_POST['email'];
$password=$_POST['password'];

$update = " UPDATE `crm_customer_user` set customer_name='$customer_name', email='$email',password='$password' where customer_id=$customer_id";
mysqli_query($conn,$update);
header('location:admin_view_customer.php');

 ?>