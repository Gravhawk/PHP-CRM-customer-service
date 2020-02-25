<?php 

require_once("../config.php");

	$employee_id = $_POST['employee_id'];
	$select =  " SELECT * FROM crm_employee_user where employee_id=$employee_id ";
	$query=mysqli_query($conn , $select);
	$res = mysqli_fetch_assoc($query);
	echo json_encode($res); 


 ?>