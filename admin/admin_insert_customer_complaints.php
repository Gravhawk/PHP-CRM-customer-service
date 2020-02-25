<?php 
session_start();
require_once('../config.php');
// require_once('../Customer/customer_login_check.php');

$company_name = $_POST['company_name'];
$model = $_POST['model'];
$customer_complaint = $_POST['customer_complaint'];
//print_r($_SESSION);
//die;
$customer_id=$_SESSION['customer_id'];
//echo
$insert = " INSERT INTO insert_customer_complaints (  company_name ,  customer_id , model , customer_complaint) values ( '$company_name' , '$customer_id', '$model' , '$customer_complaint' ) ";
mysqli_query($conn , $insert);
$latest_id =  mysqli_insert_id($conn);
// die;
header('location:admin_view_complaints.php?complaints_id='.$latest_id); 

 ?>