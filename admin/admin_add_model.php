<?php
  require_once('../config.php');
  require_once('header.php');
?>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Model</h6>
  </div>
  <div class="card-body">
    <div class="cat_form text-center">
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="insert_model.php" method="post">
        
        
        <h2 class="text-center mt-5"> Add New Model </h2>
        <div class="input-group mb-5">
          <input type="text"  name="model_name" class="form-control bg-white border-1 small  " placeholder="Add New Model" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append ">
            <button type="submit" class="btn btn-primary " >
            <i class="fas fa-plus fa-sm"></i>
            </button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
</div>
<?php
  require_once('footer.php');
?>