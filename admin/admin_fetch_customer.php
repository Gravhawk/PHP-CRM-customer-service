<?php 

require_once("../config.php");

	$customer_id = $_POST['customer_id'];
	$select =  " SELECT * FROM crm_customer_user where customer_id=$customer_id ";
	$query=mysqli_query($conn , $select);
	$res = mysqli_fetch_assoc($query);
	echo json_encode($res); 


 ?>