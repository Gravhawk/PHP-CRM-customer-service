<?php 

require_once('../config.php');

$employee_id= $_GET['employee_id'];
$delete=" DELETE FROM crm_employee_user where employee_id=$employee_id ";
mysqli_query($conn , $delete);
header('Location:admin_view_employee.php');

 ?>