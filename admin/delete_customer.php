<?php 

require_once('../config.php');

$customer_id= $_GET['customer_id'];
$delete=" DELETE FROM crm_customer_user where customer_id=$customer_id ";
mysqli_query($conn , $delete);
header('Location:admin_view_customer.php');

 ?>