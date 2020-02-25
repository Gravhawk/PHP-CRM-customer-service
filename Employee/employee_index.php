<?php 
require_once('../config.php');
require_once('header.php');

// $complaints_id=$_GET['complaints_id'];
// $select ="SELECT * FROM insert_customer_complaints ";
// $query=mysqli_query($conn,$select);

$select_customer="SELECT * FROM crm_customer_user";
$query_customer=mysqli_query($conn,$select_customer);

$select_complaint="SELECT * FROM insert_customer_complaints";
$query_complaint=mysqli_query($conn,$select_complaint);

$select_company = "SELECT * FROM crm_company_name";
$query_company =mysqli_query($conn,$select_company);

$select_model = "SELECT * FROM crm_model_name";
$query_model = mysqli_query($conn,$select_model);



?>

<style>

	.modal_btn
	{
		margin-left: 250px;
	}
	
</style>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">View Customer's Complaints</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">Complaints ID</th>
						<th scope="col">Customer's Names</th>
						<th scope="col">Email</th>
						<th scope="col">Company Name</th>
						<th scope="col">Model</th>
						<th scope="col">Expense</th>
						<th scope="col">Date</th>
						<th scope="col">Complaints</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					
					<?php

					$fetch = "	SELECT insert_customer_complaints.* , 
					 			crm_customer_user.customer_name , crm_customer_user.email
					 			FROM insert_customer_complaints 
					 			JOIN crm_customer_user 
					 			ON crm_customer_user.customer_id = insert_customer_complaints.customer_id ";
								// JOIN crm_customer_user 
								// ON crm_customer_user.customer_id = insert_customer_complaints.customer_name "; 

				// $fetch = "  ";

					$run = mysqli_query($conn,$fetch);
					
					 $i=1;
					 while($row=mysqli_fetch_assoc($run))
					{
					?>
					<tr>
						 <td> <?php echo $i++ ?> </td>
						 <td> <?php echo $row['customer_name']; ?>  </td>
						 <td> <?php echo $row['email']; ?> </td>
						 <td> <?php echo $row['company_name']; ?> </td>
						 <td> <?php echo $row['model_name']; ?> </td>
						 <td> <?php echo $row['expense']; ?> </td>
						 <td> <?php echo $row['date_time']; ?>  </td>
						 <td> <?php echo $row['customer_complaint']; ?>  </td>
						<td>
							<!-- <a href="javascript: ;"  onclick="edit_complaint(<?php //echo $row['complaints_id']; ?>)"  data-toggle="modal" data-target="#edit_complaint_modal"> EDIT</a> -->
							<button type="button"  onclick="edit_complaint(<?php echo $row['complaints_id']; ?>)"  data-toggle="modal" data-target="#edit_complaint_modal" class="btn btn-success ">
							Edit
							</button>

						<!-- 	<a href="delete_customer_complaints.php?complaints_id=<?php //echo $row['complaints_id']; ?>" title="">
								DELETE
							</a>
							<a href="admin_edit_complaints.php?complaints_id=<?php// echo $row['id']; ?>" title="">
								EDIT
							</a> -->

							<!-- <a href="javascript: ;" onclick="edit_complaint(<?php //echo $row['complaints_id']; ?>)" data-toggle="modal" data-target="#edit_complaint_modal">
							VIEW
							</a> -->
							
						</td>
					</tr>
					
					<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>



<!-- Modal -->



<div class="modal fade bd-example-modal-lg" id="edit_complaint_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Customer Complaint</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
   

      	
<!-- Customer Complaint -->
		
		<form  action="update_customer_complaints.php" method="post">


		
		<!-- Email & Name -->
		<div class="form-row">
			

		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Email" name="email" readonly>
				<input type="hidden" class="form-control" id="email" name="email">
		    </div>
		    

		    <div class="form-group col-md-6">
		      <label>Customer Name</label>
		      <input type="text" class="form-control" name="customer_name" placeholder="Customer Name" readonly>
		      <input type="hidden" class="form-control" id="customer_id" name="customer_name" >
		    </div>
		</div>
			

			<!-- Select box -->
			<div class="form-row">
				
			<!-- 1st selection box -->
				<div class="form-group col-6">
						
					<label class="" name=''>  Company's Name </label>
						<div>

						<select class="form-control" name="company_name" readonly>
							<?php while($res=mysqli_fetch_assoc($query_company)){ ?>
							<option value="<?php echo $res['company_name']; ?>" selected ><?php echo $res['company_name']; ?>
							</option>

							<?php } ?>

						</select>

						</div>
				</div>

				<!-- 2nd select box -->
					
				<div class="form-group col-6">
					<div  class="wrap-input100 input100-select" >
						<label class="">  Model's Name </label>
							<!-- <div >
								<select class="form-control" method="post" name="model_name"></select>
							</div> -->
							<div>
						<select class="form-control" name="model_name" readonly>
							<?php while($res=mysqli_fetch_assoc($query_model)){ ?>
							<option value="<?php echo $res['model_name']; ?>" selected><?php echo $res['model_name']; ?>
							</option>

							<?php } ?>

						</select>

						</div>
					</div>
				</div>
			

			</div>


		<!-- Expense & Date -->

			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Expense</label>
					<input type="text" class="form-control" id="expense" placeholder="Expense" name="expense" method="post">
				</div>
				<div class="form-group col-md-6">
					<label>Date</label>
					<input type="Date" class="form-control" id="date_time" method="post" placeholder="" name="date_time">
				</div>
			</div>

		
			<!-- Complaint box -->
			<div class="form-group" data-validate = "Message is required">
				<label for="exampleFormControlTextarea1">Complaint</label>
				<textarea class="form-control" id="customer_complaint" rows="2" name="customer_complaint" value="<?php echo $customer_complaint; ?>" readonly></textarea>
			</div>

		<!-- Buttons -->
		<input type="hidden" name="complaints_id" id="complaints_id">
		<div class="form-row " style="">
			<div class="form-group col-2">
				<input type="submit" name="insert" id="insert" class="btn btn-lg btn-primary register modal_btn " value="Insert">

			</div>

			<div class="form-group col-2">
				<button type="button" class="btn btn-lg btn-primary modal_btn" value="clear">Clear</button>
			</div>
			

		</div>
	</form>
	<div id="dropDownSelect1"></div>

      

    </div>
    <!-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
  </div>
</div>
</div>



<!-- Modal End -->

	<!-- Javascript -->

		<script>


// button Disable

// $(document).ready(function () {
//     $(".submitBtn").click(function () {
//         $(".submitBtn").attr("disabled", true);
//         return true;
//     });
// });


// JSON for Modal

  function edit_complaint(complaints_id){
  	var complaints_id= complaints_id;
$.ajax({
'url':'fetch_customer_complaints.php',
'data':'complaints_id='+complaints_id,
'type':'post',
'dataType':'json',
'success':function(data){
console.log(data);
$('input[name="complaints_id"]').val(data.complaints_id);
$('input[name="customer_name"]').val(data.customer_name);
$('input[name="email"]').val(data.email);	
// $('input[name="customer_name"]').val(data.customer_name);
$('select[name="company_name"]').val(data.company_name);
$('select[name="model_name"]').val(data.model_name);
$('input[name="expense"]').val(data.expense);
$('input[name="date_time"]').val(data.date_time);
// // $('input[name="customer_complaint"]').val(data.customer_complaint);
$('#customer_complaint').val(data.customer_complaint);

// Example
// $('input[name="customer_id"]').val(data.customer_id);

}
})
}

	
	// $(document).ready(function() 
	// {
	// 	$(document).on('click','edit_data',function())
	// 	{
	// 		var complaints_id = $(this).attr('complaints_id');
	// 		$.ajax
	// 		({
	// 			'url':'fetch_customer_complaints.php',
	// 			'method':'post',
	// 			'data':'complaints_id='+complaints_id,
	// 			'dataType':'json',
	// 			'success':function(data)
	// 			{
	// 				console.log(data);
	// 				$('input[name="email"]').val(data.email);
	// 				$('input[name="company_name"]').val(data.company_name);
	// 				$('input[name="model"]').val(data.model);
	// 				$('input[name="expense"]').val(data.expense);
	// 				$('input[name="date"]').val(data.date);
	// 				$('#customer_complaint').val(data.customer_complaint);
	// 				$('#complaints_id').val(data.complaints_id);

	// 				$('#insert').val("Update");
	// 				$('#edit_complaint_modal').modal('show');
	// 			}
	// 		})
	// 	}
	// });



	</script>