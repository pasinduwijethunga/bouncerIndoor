<?php
include 'header.php';
include '../db/dbConnection.php';

$id =  $_POST['txt_id'];
$name =  $_POST['txt_name'];
$price =  $_POST['txt_price'];
$category  =  $_POST['txt_category'];
$descrip  =  $_POST['txt_descrip'];



$sql = "UPDATE product_tbl SET

            pro_name ='$name',
            pro_catid='$category ',
            pro_prise='$price',
            pro_description='$descrip'
            
            WHERE 
            pro_id='$id'";?>
    <main class="app-content">

        <?php  if ($connection->query($sql)===true){?>
            <form action="list-products">
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

            <form action="list-products">
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