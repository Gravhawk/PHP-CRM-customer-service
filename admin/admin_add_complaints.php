<?php 

require_once('../config.php');
require_once('header.php');
?>


<div class="container ">
	<form  action="admin_insert_customer_complaints.php" method="post">
		
	
			<div class="form-group">
				<label>Customer Email address</label>
				<input type="email" class="form-control" placeholder="Email Id" name="email" method="post" >
			</div>
			

			<!-- Select box -->
			<div class="form-row">
				
			<!-- 1st selection box -->
				<div class="form-group col-6">
						
					<label class="" name=''>  Company's Name </label>
						<div>
							<select  class="form-control"  method="post" name="company_name" id="ddl" 
							onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
								<option value="">Choose</option>
								<option value="apple">Apple</option>
								<option value="hp">HP</option>
								<option value="dell">Dell</option>
							</select>
						</div>
				</div>

				<!-- 2nd select box -->
					
				<div class="form-group col-6">
					<div  class="wrap-input100 input100-select" >
						<label class="">  Model's Name </label>
							<div  >
								<select class="form-control" method="post" name="model" id="ddl2"></select>
							</div>
					</div>
				</div>
			

			</div>
		
			<!-- Complaint box -->
			<div class="form-group" data-validate = "Message is required">
				<label for="exampleFormControlTextarea1">Add Complaint's</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" method="post" name="customer_complaint"></textarea>
			</div>

		<!-- Buttons -->
		
		<div class="form-row">
			<div class="form-group col-sm-1">
				<input type="submit" name="register" class="btn btn-primary register" value="Register">
			</div>

			<div class="form-group col-sm">
				<button type="button" class="btn btn-primary" value="clear">Clear</button>
			</div>
			

		</div>
	</form>

	
</div>
<div id="dropDownSelect1"></div>

	<!-- Javascript -->

	<script>
		
	function configureDropDownLists(ddl1,ddl2) {
    var apple = ['MacBook Pro', 'MacBook Air', 'Ipad'];
    var hp = ['Specter', 'Pavellion', 'NoteBook'];
    var dell = ['XPS 15', 'XPS 13', 'Inspire'];

    switch (ddl1.value) {
        case 'apple':
            ddl2.options.length = 0;
            for (i = 0; i < apple.length; i++) {
                createOption(ddl2, apple[i], apple[i]);
            }
            break;
        case 'hp':
            ddl2.options.length = 0; 
        for (i = 0; i < hp.length; i++) {
            createOption(ddl2, hp[i], hp[i]);
            }
            break;
        case 'dell':
            ddl2.options.length = 0;
            for (i = 0; i < dell.length; i++) {
                createOption(ddl2, dell[i], dell[i]);
            }
            break;
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }


	</script>