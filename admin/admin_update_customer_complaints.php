<?php 

session_start();


require_once("../config.php");

$select="SELECT * FROM crm_customer_user";
$query=mysqli_query($conn,$select);

$complaints_id =$_POST['complaints_id'];
// $email=$_POST['email'];
// $customer_name=$_POST['customer_name'];
$company_name = $_POST['company_name'];
$model_name = $_POST['model_name'];
$expense = $_POST['expense'];
$date_time = $_POST['date_time'];
$customer_complaint=$_POST['customer_complaint'];
$useremail=$_POST['email'];

// echo
$update = " UPDATE `insert_customer_complaints` set company_name='$company_name' , model_name='$model_name' , expense='$expense' , date_time='$date_time' , customer_complaint='$customer_complaint' where `complaints_id`=$complaints_id "; 
//customer_name='$customer_name' , 
mysqli_query($conn,$update);


//mailer

// SMTP configuration

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	// Include PHPMailer library files
	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';
	require 'PHPMailer/OAuth.php';
	require 'PHPMailer/POP3.php';

	$mail = new PHPMailer;
	$mail1 = new PHPMailer;
	
	$mail->isSMTP();
	$mail->Host     = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'darpanpotdar619@gmail.com';
	$mail->Password = 'darpan1879';
	$mail->SMTPSecure = 'tls';
	$mail->Port     = 587;

	$mail->setFrom('darpanpotdar619@gmail.com', 'CRM for Internet Service Provider');

	// Add a recipient
	$mail->addAddress($useremail);

	// Email subject
	$mail->Subject = 'Your compliant has been solved';

	// Set email format to HTML
	$mail->isHTML(true);

	// Email body content
	$mailContent = "
	    
		Thanks for choosing CRM service.
		<br>
		Your total service charge is Rs. ".$expense." <br>

		
		 

		<br>
		<br>
		For futher queries,
		<br>
		Email Us:  darpanpotdar619@gmail.com
		<br>
		<br>
		Thank you,

		<h4>CRM for Internet Service Provider </h4><br>
		HR Head</h4>";

	$mail->Body = $mailContent;

	// Send email
	if(!$mail->send()){
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}else{
	    echo 'Message has been sent';
	}

// die;
header("Location:admin_view_complaints.php");


 ?>

