<?php  

require_once('../config.php');
// session_start();
// $id = $_POST['complaints_id'];
// $select = " SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id ";
// $query=mysqli_query($conn , $select);
// $res = mysqli_fetch_assoc($query);
// echo json_encode($res); 

// if (isset($_POST["complaints_id"]))
// {
// 	$select =  " SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id ";
// 	$result=mysqli_query($conn , $select);
// 	$res = mysqli_fetch_assoc($result);
// 	echo json_encode($res); 
// }
	$complaints_id = $_POST['complaints_id'];
	$fetch = "	SELECT insert_customer_complaints.* , 
				crm_customer_user.customer_name , crm_customer_user.email
				FROM insert_customer_complaints 
				JOIN crm_customer_user 
				ON crm_customer_user.customer_id = insert_customer_complaints.customer_id 
				where complaints_id=$complaints_id";
	
	
	//$select =  " SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id ";
	$query=mysqli_query($conn , $fetch);  // select
	$res = mysqli_fetch_assoc($query);
	echo json_encode($res); 

?>