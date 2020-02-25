<?php
require_once('../config.php');
require_once('header.php');
$select = " SELECT * FROM `crm_employee_user` ";
$query = mysqli_query($conn,$select);
?>

<style>

	.modal_btn
	{
		margin-left: 250px;
	}
	
</style>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">View Employee's</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">Sr.no</th>
						<th scope="col">Employee's Names</th>
						<th scope="col">Email</th>
						<th scope="col">password</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					
					<?php
					$i=1;
					while($row=mysqli_fetch_assoc($query))
					{
					?>
					<tr>
						<td> <?php echo $i++ ?> </td>
						<td> <?php echo $row['employee_name']; ?>  </td>
						<td> <?php echo $row['email']; ?> </td>
						<td> <?php echo $row['password']; ?>  </td>
						<td>
							<a class="btn btn-warning" href="javascript: ;" onclick="edit_employee(<?php echo $row['employee_id']; ?>)" data-toggle="modal" data-target="#edit_employee_modal">
								EDIT
							</a>
							<a class="btn btn-danger" href="delete_employee.php?employee_id=<?php echo $row['employee_id']; ?>" title="">
								DELETE
							</a>
							
							
						</td>
					</tr>
					
					<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="edit_employee_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
	      <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	      </button>
    	</div>
      	
      	<div class="modal-body" >


		<form action="admin_update_employee.php" method="post">
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="Employee Name">
			      <!-- <input type="hidden" id="emp_id" name="emp_id"> -->
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" class="form-control" id="" placeholder="">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			    </div>
			  </div>
			<!-- Buttons -->
		<hr>
		<input type="hidden" name="employee_id" id="employee_id">
		<div class="form-row " style="">
			<div class="form-group col-2">
				<input type="submit" name="insert" id="insert" class="btn btn-primary register btn-lg modal_btn" value="Insert">
			</div>

			<div class="form-group col-2">
				<button type="reset" class="btn btn-primary btn-lg modal_btn" value="clear">Clear</button>
			</div>
			

		</div>
		</form>
		</div>
    </div>
  </div>
</div>


<script>
	
	function edit_employee(employee_id){

		// var employee_id = $employee_id;
		$.ajax({
			'url':'admin_fetch_employee.php',
			'data':'employee_id='+employee_id,
			'type':'post',
			'dataType':'json',
			'success': function(data){

				console.log(data);
				$('input[name="employee_id"]').val(data.employee_id);
				$('input[name="employee_name"]').val(data.employee_name);
				$('input[name="email"]').val(data.email);
				$('input[name="password"]').val(data.password);
				// $('inpye[name="emp_id"]').val(data.employee_id);


			}



		})


	}



</script>