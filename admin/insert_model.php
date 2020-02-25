 <?php 

require_once('../config.php');

$model_name=$_POST['model_name'];

$insert= " INSERT INTO crm_model_name (model_name) values ('$model_name') ";
mysqli_query($conn,$insert);
header("Location:admin_view_model.php");





 ?>