 <?php 

require_once('../config.php');

$company_name=$_POST['company_name'];

$insert= " INSERT INTO crm_company_name (company_name) values ('$company_name') ";
mysqli_query($conn,$insert);
header("Location:admin_view_company.php");





 ?>