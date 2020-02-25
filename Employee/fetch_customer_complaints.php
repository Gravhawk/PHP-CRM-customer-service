<?php  

require_once("../config.php");
// session_start();
	$complaints_id = $_POST['complaints_id'];
	// $customer_id = $_POST['customer_id'];
	// $employee_id = $_POST['employee_id'];
	// $company_id=$_POST['company_id'];
	// $model_id = $_POST['model_id'];
	// $select =  " SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id ";
	// $fetch = " SELECT insert_customer_complaints.* , 
	// 			crm_customer_user.customer_name , crm_customer_user.email , crm_company_name.company_name , crm_model_name.model_name
	// 			FROM insert_customer_complaints 
	// 			JOIN crm_customer_user ON crm_customer_user.customer_id = insert_customer_complaints.complaints_id
	// 			JOIN crm_company_name ON crm_company_name.company_id = insert_customer_complaints.complaints_id
	// 			JOIN crm_model_name ON crm_model_name.model_id = insert_customer_complaints.complaints_id 
	// 			where complaints_id=$complaints_id";

		$fetch = "	SELECT insert_customer_complaints.* , 
					crm_customer_user.customer_name , crm_customer_user.email
					FROM insert_customer_complaints 
					JOIN crm_customer_user 
					ON crm_customer_user.customer_id = insert_customer_complaints.customer_id 
					where complaints_id=$complaints_id";
	// $fetch = "	SELECT insert_customer_complaints.* , 
	// 			crm_customer_user.customer_name , crm_customer_user.email
	// 			FROM insert_customer_complaints 
	// 			JOIN crm_customer_user 
	// 			ON crm_customer_user.customer_id = insert_customer_complaints.complaints_id ";

	$query=mysqli_query($conn , $fetch);  //select   
	$res = mysqli_fetch_assoc($query);
	echo json_encode($res); 

?>