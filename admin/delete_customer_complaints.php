<?php 

require_once('../config.php');

$complaints_id= $_GET['complaints_id'];

$delete=" DELETE  FROM insert_customer_complaints where complaints_id=$complaints_id ";

mysqli_query($conn , $delete);
header('Location:admin_view_complaints.php');

 ?>