<?php
include 'header.php';
include '../db/dbConnection.php';

$id =  $_GET['id'];

$delete_profile = "DELETE FROM `profile_pictures` WHERE `register_id`={$id}";
$del_profile=mysqli_query($connection,$delete_profile);

$del_slip="DELETE FROM `payment_slip_image` WHERE `register_id`={$id}";
$del_slip_image=mysqli_query($connection,$del_slip);

$sql="DELETE FROM `registation` WHERE `register_id`={$id}";

?>
    <main class="app-content">

        <?php  if ($connection->query($sql)===true){?>
            <form action="list-register">
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

            <form action="list-register">
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