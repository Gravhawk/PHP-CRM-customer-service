<!DOCTYPE html>
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
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="customer_complaint/css/util.css">
		<link rel="stylesheet" type="text/css" href="customer_complaint/css/main.css">
		<!--===============================================================================================-->
		<script src="jquery.min.js"></script>
		<script type="text/javascript"></script>

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
	$select_company = "SELECT * FROM crm_company_name";
	$query_company = mysqli_query($conn,$select_company);

	$select_model = "SELECT * FROM crm_model_name";
	$query_model = mysqli_query($conn,$select_model);
	?>
	<body>


		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white"  id=js-navbar >
			<div class="container">
				<a class="navbar-brand mt-2 h2" href="#">Customer Care Service</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
				<i class="fa fa-bars"></i> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav mt-2" style="margin-left: 400px;">
						<li class="nav-item active nav-item-1"><a href="customer_previous_complaints.php" class="nav-link">Your Previous Complaint's</a></li>
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

		<!-- 1st select Box -->
		<div class="container-contact100">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form" action="insert_customer_complaints.php" method="post">
					<span class="contact100-form-title">
						Complaint Box
					</span>
					<!-- 1st selection box -->
					<div class="wrap-input100 input100-select">
						
						<span class="label-input100" name=''>  Company's Name </span>
						<div>
							<select  class="selection-2"  method="post" name="company_name">
								<?php while($res=mysqli_fetch_assoc($query_company)){ ?>
								<option value="<?php echo $res['company_name']; ?>" selected><?php echo $res['company_name']; ?>
								</option>
								<?php }  ?>
							</select>
						</div>
						<span class="focus-input100"></span>
					</div>
					<!-- 2nd select box -->
					
					<div  class="wrap-input100 input100-select" >
						<span class="label-input100">  Model's Name </span>
						<div>
							<select  class="selection-2"  method="post" name="model_name">
								<?php while($res=mysqli_fetch_assoc($query_model)){ ?>
								<option value="<?php echo $res['model_name']; ?>" selected><?php echo $res['model_name']; ?>
									
								</option>
								<?php }  ?>
							</select>
						</div>
					</div>
					<!-- Complaint Box -->
					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<span class="label-input100">Complaint</span>
						<textarea class="input100" method="post" name="customer_complaint" placeholder="Right your complaint here..."></textarea>
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<div class="wrap-contact100-form-btn col-md-6">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn mb-2" style="margin-left: 20px;" >
							Submit
							</button>
						</div>
						<div class="wrap-contact100-form-btn col-md-6">
							<div class="contact100-form-bgbtn"></div>
							<button class="contact100-form-btn" value="clear">
							<span  style="margin-left: 70px;">
								Clear
								<!-- <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i> -->
							</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id="dropDownSelect1"></div>
		<!-- Javascript -->
		<script>
			
		// function configureDropDownLists(ddl1,ddl2) {
		// var apple = ['MacBook Pro', 'MacBook Air', 'Ipad'];
		// var hp = ['Specter', 'Pavellion', 'NoteBook'];
		// var dell = ['XPS 15', 'XPS 13', 'Inspire'];
		// switch (ddl1.value) {
		//     case 'apple':
		//         ddl2.options.length = 0;
		//         for (i = 0; i < apple.length; i++) {
		//             createOption(ddl2, apple[i], apple[i]);
		//         }
		//         break;
		//     case 'hp':
		//     ddl2.options.length = 0;
		// for (i = 0; i < hp.length; i++) {
		//     createOption(ddl2, hp[i], hp[i]);
		//     }
		//     break;
		// case 'dell':
		//     ddl2.options.length = 0;
		//     for (i = 0; i < dell.length; i++) {
		//         createOption(ddl2, dell[i], dell[i]);
		//     }
		//     break;
		//     default:
		//         ddl2.options.length = 0;
		//     break;
		// }
		// }
		// function createOption(ddl, text, value) {
		//     var opt = document.createElement('option');
		//     opt.value = value;
		//     opt.text = text;
		//     ddl.options.add(opt);
		// }
		</script>
		<!--===============================================================================================-->
		<script src="customer_complaint/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="customer_complaint/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="customer_complaint/vendor/bootstrap/js/popper.js"></script>
		<script src="customer_complaint/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="customer_complaint/vendor/select2/select2.min.js"></script>
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