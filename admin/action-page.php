<?php
include 'header.php';
include '../db/dbConnection.php';

$id =  $_GET['id'];
//$name =  $_POST['txt_category'];
$get_data="SELECT * FROM `registation` WHERE `register_id`={$id}";
$data_new=mysqli_query($connection,$get_data);
$fetch_res=mysqli_fetch_array($data_new);
$re_id=$fetch_res['register_id'];
$re_status='Active';

$sql = "UPDATE `registation` SET `status`='$re_status' WHERE `register_id`={$re_id}"; ?>
    <main class="app-content">

        <?php  if ($connection->query($sql)===true){?>

            <form action="list-register">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-success">
                            <button class="close" type="button" data-dismiss="alert">×</button><strong>Successfully
                                Added!</strong> </a>.
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
                            <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a
                                class="alert-link" href="#">Change a few things up</a> and try submitting again.
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