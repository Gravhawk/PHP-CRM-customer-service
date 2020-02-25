<script src="jquery.min.js"></script>
<?php
require_once('header.php');
require_once('../config.php');
$select=" SELECT * FROM `crm_company_name` ";
$query=mysqli_query($conn,$select);
?>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">View Company's</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">Company_ID.no</th>
            <th scope="col"> Available Company's</th>
            <!-- <th scope="col" >Action</th> -->
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
            <td> <?php echo $row['company_name']; ?>  </td>
           <!--  <td>
              <a href="javascript:;" onclick= "edit_cat(<?php //echo $row['company_id']; ?>)" data-toggle="modal" data-target="#edit_cat_modal">Edit</a>
            </td> -->
          </tr>
          
          <?php } ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<?php
require_once('footer.php');
?>
<!-- Modal -->
<div class="modal fade" id="edit_cat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">


<!-- Update Category -->

      <form action="update_category.php" method="POST">
        <div class="form-group my-5">
          <input class="form-control" id="categ" name="categ" required placeholder="Type a category to add">
          <input type="hidden" class="form-control" id="categ_id" name="categ_id" >
        </div>
        <button class="btn btn-success col-md-5 offset-md-1" type="submit" name="submit">ADD</button>
        <button class="btn btn-danger col-md-5 mt-2 mt-md-0" type="reset">CLEAR</button>
      </form>
    </div>
    <!-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
  </div>
</div>
</div>
<script>
// $(document).ready( function () {
//   $('#prod_table').DataTable();
// $('#del_prod').click(function (){
// $(this).parentsUntil('tbody').fadeOut();
//});
//  });

function edit_cat(id){
//alert(cat_id);
$.ajax({
'url':'edit_category.php',
'data':'id='+id,
'type':'post',
'dataType':'json',
'success':function(data){
//console.log(data);
$('input[name="categ"]').val(data.category);
$('input[name="categ_id"]').val(data.id);
}
})
}
</script>