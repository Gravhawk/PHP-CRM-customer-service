<?php 

// session_start();
require_once('../config.php');


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$id = $_POST['cus_id'];
$update = " UPDATE crm_customer_user set name='$name' , email='$email' , password='$password' where id=$id ";
mysqli_query($conn , $update);
header('location:admin_view_customer.php');



 ?>