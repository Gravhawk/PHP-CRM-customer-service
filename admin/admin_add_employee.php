<?php
require_once('../config.php');
require_once('header.php');
?>


<div class="container">
	
	<form action="admin_insert_employee.php" method="POST">
		
		<div class="form-group">
			<label for="">Employee Name</label>
			<input type="text" class="form-control" placeholder="Employee name" name="employee_name">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  name="email">
		</div>
		
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		</div>
		<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
		<input type="submit" name="register" class="btn btn-primary register" value="Register">
	</form>
</div>