<?php 
  
  require_once('../config.php');  
  require_once("header.php");

  $cus= " SELECT * FROM crm_customer_user ";
  $result = mysqli_query($conn,$cus);
  $count = mysqli_num_rows($result);

  $comp = "SELECT * FROM insert_customer_complaints";
  $result_comp = mysqli_query($conn , $comp);
  $count_comp = mysqli_num_rows($result_comp);

  $emp = " SELECT * FROM crm_employee_user ";
  $result_emp = mysqli_query($conn , $emp);
  $count_emp = mysqli_num_rows($result_emp);

 ?>

 <style>

   
 </style>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Index page</title>
</head>
<body>

<!-- card 1 Customer -->

<div class="container-fluid text-center" > 
  <div class="row justify-content-md-center">
    <div class="col-sm-4"> 
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
      <a class="card-header text-white bg-info" href="admin_view_customer.php" style="text-decoration:none">Customer
      </a>
      <div class="card-body">
        <h5 class="card-title">   </h5>
        <p class="card-text"> <?php echo " Currently we have  <br>" . $count . " Customer in table."; ?> </p>
      </div>
    </div>
    </div>
  </div>


<!-- card 2 Employee -->
<div class="row justify-content-md-center">
    <div class="col-sm-4"> 
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
    <a class="card-header text-white bg-secondary" href="admin_view_employee.php" style="text-decoration:none">
      Employee
    </a>
      <div class="card-body">
        <h5 class="card-title"> </h5>
        <p class="card-text">  <?php echo "You have available inventory of <br>" . $count_emp . "  in table."; ?> </p>
      </div>
    </div>
  </div>
</div>

<!-- card 3 Customer complaints -->
<div class="row justify-content-md-center">
  <div class="col-sm-4"> 
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
      <a class="card-header text-white bg-danger"  href="admin_view_complaints.php" style="text-decoration:none">Customer Complaints</a>
      <div class="card-body">
        <h5 class="card-title"> </h5>
        <p class="card-text">  <?php echo "We have currently <br>" . $count_comp . " complaints in table."; ?> </p>
      </div>
    </div>
  </div>
</div>
  
</div>





</body>

<?php require_once('footer.php' ); ?>
<script type="text/javascript" src="assets/js/display_profile_image.js"></script>