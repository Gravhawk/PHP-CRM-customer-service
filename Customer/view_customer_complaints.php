<?php
require_once('../config.php');
$complaints_id=$_GET['complaints_id'];



 $select = " SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id ";
 $query_1 = mysqli_query($conn,$select);

// session_start();
// $session_id=$_SESSION['customer_id'];
// $select_1="SELECT * FROM insert_customer_complaints where customer_id=$session_id";
// $query = mysqli_query($conn,$select_1);



?>
<style>
.logout{
	text-decoration: none;
	color: white;
}
</style>
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
	<body>
		
	<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white"  id=js-navbar >
			<div class="container">
				<a class="navbar-brand mb-0 h1" href="customer_index.html">Customer Care Service</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
				<i class="fa fa-bars"></i> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto mt-2">
						<li class="nav-item active"><a href="customer_previous_complaints.php" class="nav-link">Your Previous Complaint's</a></li>
						<li class="nav-item"><a href="add_customer_complaints.php" class="nav-link">Add New Complaint</a></li>
						
					<div class="wrap-contact100-form-btn  col-sm-2">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" value="clear" href="customer_logout.php"  >
							<span class="logout pb-2" style="margin-left:25px;">
								LogOut
							</span>
						</a>
					</div>


					</ul>
				</div>
			</div>
		</nav>

		<!-- Current Complaint Box -->
		<div class="main-wrapper p-5">
			<div class="working-process-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-7">
							<!-- <div class="section-title text-center">
									<h2>Our Working Process</h2>
									<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving</p>
							</div> -->
							<div class="">
								<form class="contact100-form validate-form">
									<span class="contact100-form-title">
										Complaint Box
									</span>
									
									<?php
									// $fetch= "SELECT insert_customer_complaints.*, crm_company_name.*, crm_model_name.*,
																	// 				crm_company_name.company_name FROM insert_customer_complaints
																	// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_id
																		// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_name
																	// 				JOIN
																	// 				";
									while ($row = mysqli_fetch_assoc($query_1))
										{
									
									?>
									<div class="wrap-input100 input100-select  text-center ">
										<span class="label-input100 " >  Company's Name </span>
										<div>
											<input class=" text-center  text_size" name="company_name" type="" value="<?php echo $row['company_name']; ?>" >
										</div>
										<span class="focus-input100"></span>
									</div>
									<div class="wrap-input100 input100-select  text-center">
										<span class="label-input100">  Model Name </span>
										<div>
											<input class="selection-2 text_size  text-center" name="model_name" type="" value=" <?php echo $row['model_name']; ?> " >
										</div>
										<span class="focus-input100"></span>
									</div>
									<div class="wrap-input100 validate-input  text-center" data-validate = "">
										<span class="label-input100">Complaint</span>
										<input class="input100 text_size  text-center" name="customer_complaint" placeholder="" value="<?php echo $row['customer_complaint']; ?>" ></input>
										<span class="focus-input100"></span>
									</div>
									<!-- <div class="container-contact100-form-btn">
										<div class="wrap-contact100-form-btn col-md-6">
											<div class="contact100-form-bgbtn"></div>
											<a class="contact100-form-btn" value="clear" href="customer_logout.php" style="" >
												<span class="logout">
													LogOut
												</span>
											</a>
										</div>
									</div> -->
									
								</form>
								<?php } ?>
							</div>
						</div>
					</div>
					<!-- 	<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
							<div class="single-work-process">
									<div class="work-icon-box">
											<span class="lnr lnr-funnel"></span>
									</div>
									<h4 class="caption">1. Researching</h4>
							</div>
							<div class="work-arrow">
									<img src="img/elements/work-arrow.png" alt="">
							</div>
							<div class="single-work-process">
									<div class="work-icon-box">
											<span class="lnr lnr-layers"></span>
									</div>
									<h4 class="caption">2. Wireframing</h4>
							</div>
							<div class="work-arrow">
									<img src="img/elements/work-arrow.png" alt="">
							</div>
							<div class="single-work-process">
									<div class="work-icon-box">
											<span class="lnr lnr-paw"></span>
									</div>
									<h4 class="caption">3. Prototyping</h4>
							</div>
							<div class="work-arrow">
									<img src="img/elements/work-arrow.png" alt="">
							</div>
							<div class="single-work-process">
									<div class="work-icon-box">
											<span class="lnr lnr-smile"></span>
									</div>
									<h4 class="caption">4. Final Design</h4>
							</div>
					</div> -->
				</div>
			</div>
		</div>
		
	</div>
	<!-- <div id="dropDownSelect1"></div> -->
	
	<!-- Previous Complaint -->

	
	<?php 

	// $select_1="SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id";
	// $query_1=mysqli_query($conn,$select_1);

	 ?>
<!-- 	
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
						      <th scope="col">Company Name</th>
						      <th scope="col">Model Name</th>
						      <th scope="col">Complaint's</th>
						      <th scope="col">Expense</th>
						      <th scope="col">Resolve Date</th>
	
						    </tr>
						  </thead>
						  <tbody> -->

						<?php 
							
							// echo
							// $session_id=$_SESSION['customer_id'];
							// $fetch = "SELECT insert_customer_complaints.* , 
							//  crm_customer_user.customer_name
							// FROM insert_customer_complaints 
							// JOIN crm_customer_user 
							// ON crm_customer_user.customer_id = insert_customer_complaints.customer_id  where insert_customer_complaints.customer_id=$session_id";
							 

								// $fetch="SELECT * FROM insert_customer_complaints where complaints_id=$complaints_id";


						// $run = mysqli_query($conn,$fetch);

						 // while ($res_1= mysqli_fetch_assoc($run)){
						 ?>
						
						<!-- <tr>
						 <td> <?php //echo $res_1['company_name'];?> </td>
						 <td> <?php //echo $res_1['model_name']; ?>  </td>
						 <td> <?php //echo $res_1['customer_complaint']; ?>  </td>
						 <td> <?php //echo $res_1['expense']; ?>  </td>
						 <td> <?php //echo $res_1['date_time']; ?>  </td>
						 
						</tr> -->



						<?php  //} ?> 
						
<!-- 						  </tbody>
						</table>
						
					


					</div>
				</div>
				
			</div>
	
		</div>
	</div> -->
	<!--===============================================================================================-->
	<script src="customer_complaint/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="customer_complaint/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="customer_complaint/vendor/bootstrap/js/popper.js"></script>
	<script src="customer_complaint/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="customer_complaint/vendor/select2/select2.min.js"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="customer_complaint/vendor/daterangepicker/moment.min.js"></script>
	<script src="customer_complaint/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="customer_complaint/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
<!--
<div class="wrap-contact100">
					<form class="contact100-form validate-form">
								<span class="contact100-form-title">
											Complaint Box
								</span>
									
	<?php
	// $fetch= "SELECT insert_customer_complaints.*, crm_company_name.*, crm_model_name.*,
									// 				crm_company_name.company_name FROM insert_customer_complaints
									// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_id
										// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_name
									// 				JOIN
									// 				";
	//while ($row = mysqli_fetch_array($query))
		{
	
	?>
	<div class="wrap-input100 input100-select ">
		<span class="label-input100 " >  Company's Name </span>
		<div>
			<input class="" name="company_name" type="" value="<?php //echo $row['company_name']; ?>" >
		</div>
		<span class="focus-input100"></span>
	</div>
	<div class="wrap-input100 input100-select">
		<span class="label-input100">  Model Name </span>
		<div>
			<input class="selection-2" name="model_name" type="" value=" <?php// echo $row['model_name']; ?> " >
		</div>
		<span class="focus-input100"></span>
	</div>
	<div class="wrap-input100 validate-input" data-validate = "">
		<span class="label-input100">Complaint</span>
		<input class="input100" name="customer_complaint" placeholder="" value="<?php //echo $row['customer_complaint']; ?>" ></input>
		<span class="focus-input100"></span>
	</div>
	<div class="container-contact100-form-btn">
		<div class="wrap-contact100-form-btn col-md-6">
			<div class="contact100-form-bgbtn"></div>
			<a class="contact100-form-btn" value="clear" href="customer_logout.php" style="" >
				<span class="logout">
					LogOut
				</span>
			</a>
		</div>
	</div>
	
</form>
<?php } ?>
</div>
-->
<!-- <?php							// $fetch= "SELECT insert_customer_complaints.*, crm_company_name.*, crm_model_name.*,
			// 				crm_company_name.company_name FROM insert_customer_complaints
			// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_id
				// 				JOIN crm_company_name ON crm_company_name.company_id=insert_customer_complaints.company_name
			// 				JOIN
			// 				";
//while ($row = mysqli_fetch_array($query))
{

?>
<div class="wrap-input100 input100-select ">
<span class="label-input100 " >  Company's Name </span>
<div>
	<input class="" name="company_name" type="" value="<?php //echo $row['company_name']; ?>" >
</div>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 input100-select">
<span class="label-input100">  Model Name </span>
<div>
	<input class="selection-2" name="model_name" type="" value=" <?php //echo $row['model_name']; ?> " >
</div>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate = "">
<span class="label-input100">Complaint</span>
<input class="input100" name="customer_complaint" placeholder="" value="<?php //echo $row['customer_complaint']; ?>" ></input>
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<div class="wrap-contact100-form-btn col-md-6">
	<div class="contact100-form-bgbtn"></div>
	<a class="contact100-form-btn" value="clear" href="customer_logout.php" style="" >
		<span class="logout">
			LogOut
		</span>
	</a>
</div>
</div>

</form>-->
<!-- <?php } ?> -->