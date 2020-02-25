<html lang="en">
	<head>
		<title>Customer Complaints</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="customer_complaint/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="<style></style>sheet" type="text/css" href="customer_complaint/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/css/util.css">
		<link rel="stylesheet" type="text/css" href="customer_complaint/css/main.css">
		<!--===============================================================================================-->
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bobsled</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
	</head>

<?php 

require_once('../config.php');

session_start();
$session_id=$_SESSION['customer_id'];
$select_1="SELECT * FROM insert_customer_complaints where customer_id=$session_id";
// $select_company = "SELECT * FROM crm_company_name";
// $query_company = mysqli_query($conn, $select_company);

$query = mysqli_query($conn,$select_1);


 ?>



 <!-- Previous Complaint -->

	
	<?php 

	// $select_1="SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id";
	// $query_1=mysqli_query($conn,$select_1);

	 ?>


	 <!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white"  id=js-navbar >
			<div class="container">
				<a class="navbar-brand mt-2 h2" href="#">Customer Care Service</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
				<i class="fa fa-bars"></i> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav mt-2" style="margin-left: 400px;">
						<li class="nav-item active nav-item-1"><a href="add_customer_complaints.php" class="nav-link">Add New Complaint</a></li>
						<!-- <li class="nav-item"><a href="" class="nav-link">Add New Complaint</a></li> -->
						
					<div class="wrap-contact100-form-btn-1  col-sm-2">
						<div class="contact100-form-bgbtn-1 "></div>
						<a class="contact100-form-btn-1" value="clear" href="customer_logout.php" style="" >
							<span class="logout mb-2" style="font-size: 15px ; margin-left:1080px;">
								LogOut
							</span>
						</a>
					</div>


					</ul>
				</div>
			</div>
		</nav>
	
	<div class="container-contact100" method="post">
		<div class="row">
			<div class="col-md-12">
				
				<div class="wrap-contact100">
					<div class="contact100-form validate-form">
						<span class="contact100-form-title-1">
							Your Previous Complaints
						</span>

						<table class="table table-striped">
						  <thead>
						    <tr>
						      <!-- <th scope="col">Complaint's No.</th> -->
						      <th scope="col">Company Name</th>
						      <th scope="col">Model Name</th>
						      <th scope="col">Complaint's</th>
						      <th scope="col">Expense</th>
						      <th scope="col">Resolve Date</th>
	
						    </tr>
						  </thead>
						  <tbody>

						<?php 
							
							// echo
							$session_id=$_SESSION['customer_id'];
							$fetch = "SELECT insert_customer_complaints.* , 
							 crm_customer_user.customer_name
							FROM insert_customer_complaints 
							JOIN crm_customer_user 
							ON crm_customer_user.customer_id = insert_customer_complaints.customer_id  where insert_customer_complaints.customer_id=$session_id";
							 

								// $fetch="SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id";


						$run = mysqli_query($conn,$fetch);

						 while ($res_1= mysqli_fetch_assoc($run)){
						 ?>
						
						<tr>
						 <td> <?php echo $res_1['company_name'];?> </td>
						 <td> <?php echo $res_1['model_name']; ?>  </td>
						 <td> <?php echo $res_1['customer_complaint']; ?>  </td>
						 <td> <?php echo $res_1['expense']; ?>  </td>
						 <td> <?php echo $res_1['date_time']; ?>  </td>
						 
						</tr>



						<?php } ?>
						
						  </tbody>
						</table>
						
					


					</div>
				</div>
				
			</div>
	
		</div>
	</div>