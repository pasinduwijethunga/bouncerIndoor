<?php 
include 'header.php'; 
include '../db/dbConnection.php';

$id =  $_GET['id'];

$sql = "DELETE FROM gallery WHERE g_id = '$id' ";

?>
<main class="app-content">

 <?php  if ($connection->query($sql)===true){?> 
<form action="list-image">
    	<div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>.
              </div>
            </div>
          </div>
          <div align="center">
          <button type="submit" class="btn btn-success" type="button">Success</button>
          	
          </div>
</form>
<?php }else{ ?>

		<form action="list-image">
			<div class="col-lg-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a class="alert-link" href="#">Change a few things up</a> and try submitting again.
              </div>
            </div>
          </div>
          <div align="center">
          	
          <button type="submit" class="btn btn-danger" type="button">Re - try</button>
          </div>
		</form>

<?php } ?>

</main>
<?php
 include 'footer.php';
 ?>