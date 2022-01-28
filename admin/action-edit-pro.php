<?php
include 'header.php';
include '../db/dbConnection.php';

$id =  $_POST['txt_id'];
$frist_name =  $_POST['frist_name'];
$last_name =  $_POST['last_name'];
$address =  $_POST['address'];
$email =  $_POST['email'];
$telephone =  $_POST['telephone'];
$father_name =  $_POST['father_name'];
$father_teli =  $_POST['father_teli'];
$mother_name =  $_POST['mother_name'];
$mother_teli =  $_POST['mother_teli'];
$birthday =  $_POST['birthday'];
$registation_date =  $_POST['registation_date'];
$team_type =  $_POST['team_type'];
$coach_name =  $_POST['coach_name'];
$gender =  $_POST['gender'];
$status =  $_POST['status'];


$sql = "UPDATE `registation` SET `frist_name`='$frist_name',
                       `last_name`='$last_name',
                       `address`='$address',
                       `email`='$email',
                       `telephone`='$telephone',
                       `father_name`='$father_name',
                       `father_teli`='$father_teli',
                       `mother_name`='$mother_name',
                       `mother_teli`='$mother_teli',
                       `birthday`='$birthday',
                       `registation_date`='$registation_date',
                       `team_type`='$team_type',
                       `coach_name`='$coach_name',`gender`='$gender',`status`='$status' WHERE `register_id`={$id}";?>
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