<?php
require_once("../config.php");

$complaints_id = $_POST['complaints_id'];
// $company_name = $_POST['company_name'];
// $model_name= $_POST['model_name'];
$expense = $_POST['expense'];
$date_time = $_POST['date_time'];

$update = " UPDATE `insert_customer_complaints`  set  expense='$expense' , date_time='$date_time' where `complaints_id`=$complaints_id "; //company_name='$company_name' , model_name='$model_name' ,
mysqli_query($conn,$update);
header("Location:employee_index.php");


?>