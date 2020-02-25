<?php
require_once('../config.php');
require_once('header.php');
$select = " SELECT * FROM `crm_customer_user` ";
$query = mysqli_query($conn,$select);
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">View Customer's</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th scope="col">Sr.no</th>
						<th scope="col">Customer's Names</th>
						<th scope="col">Email</th>
						<th scope="col">password</th>
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
						<td> <?php echo $row['customer_name']; ?>  </td>
						<td> <?php echo $row['email']; ?> </td>
						<td> <?php echo $row['password']; ?>  </td>
					</tr>
					
					<?php } ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>