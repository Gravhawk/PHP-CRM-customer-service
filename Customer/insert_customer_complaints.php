<?php
session_start();
require_once('../config.php');
//require_once('');
$company_name = $_POST['company_name'];
$model_name = $_POST['model_name'];
$customer_complaint = $_POST['customer_complaint'];
//print_r($_SESSION);
//die;
$customer_id=$_SESSION['customer_id'];
$insert = " INSERT INTO insert_customer_complaints ( customer_id,  company_name , model_name , customer_complaint ) values ('$customer_id', '$company_name' ,'$model_name' , '$customer_complaint' ) ";
// $insert = " INSERT INTO `insert_customer_complaints` ( customer_id,  company_id , model_id , customer_complaint ) values ('$customer_id', '$company_name' ,  '$model_name' , '$customer_complaint' ) ";
mysqli_query($conn , $insert);
$latest_id =  mysqli_insert_id($conn);
//die;
header('location:view_customer_complaints.php?complaints_id='.$latest_id);
	
?>