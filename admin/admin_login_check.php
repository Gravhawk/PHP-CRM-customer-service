<?php 	

require_once('../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$select = " SELECT * FROM `crm_admin_login` where  email='$email' && password='$password' ";

$query=mysqli_query($conn,$select);

if (mysqli_num_rows($query)>0) 
{
	session_start();
	while($res=mysqli_fetch_assoc($query))
	{
		$_SESSION['id']=$res['id'];
		$_SESSION['name']=$res['name'];
		$_SESSION['email']=$res['email'];
	}

	header('location:admin_index_page.php');
}
else
{
	header('location:admin_signin.php');
}



 ?>