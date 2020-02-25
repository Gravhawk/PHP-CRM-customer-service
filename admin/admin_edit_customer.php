<?php 
require_once('header.php');
require_once('../config.php');
$id = $_GET['cus_id'];
$select = " SELECT * FROM crm_customer_user where id=$id ";
$query = mysqli_query($conn , $select);
$res = mysqli_fetch_object($query);

?>

<!-- <form action="customer_update.php" method="post">
	
	Name :<input type="text" name="name" placeholder="Enter name" value=" <?php //echo $res->name; ?> "> <br> <br>
	Email :<input type="Email" name="email" placeholder="Enter Email" value=" <?php //echo $res->email; ?> " > <br> <br>
	Password :<input type="password" name="password" placeholder="Enter Password" value=" <?php //echo $res->password; ?> "> <br> <br>

	<input type="hidden" name="cus_id" value="<?php //echo $res->id; ?> ">
	<button type="submit" placeholder="Submit">Submit</button>

</form> -->

<style>

#button
{

}
	
</style>

<div class="container">
	

<form action="customer_update.php" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name :</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Enter name" value=" <?php echo $res->name; ?> " >
    </div>
  </div>

<div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-8">
      <input type="Email" name="email" class="form-control" id="inputPassword3"  placeholder="Enter Email" value=" <?php echo $res->email; ?> " >
  	</div>
</div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password :</label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value=" <?php echo $res->password; ?> ">
    </div>
  </div>

		<input type="hidden" name="cus_id" value="<?php echo $res->id; ?> ">
		<button type="submit" placeholder="Submit" class="btn btn-outline-success" id="button" >Submit</button>

	
  </form>

 </div>
