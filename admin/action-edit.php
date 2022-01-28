<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';
?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM `registation` WHERE `register_id`={$id}";
$result = mysqli_query($connection, $sql);
$resu=mysqli_fetch_assoc($result);
print_r($resu);
 ?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> EDIT CATEGORY</h1>
        </div>
    </div>
    <div class="row">
        <form action="action-edit-pro.php" method="post" style="width: 500px !important;" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title"></h3>
                    <div class="tile-body">

                        <div class="form-group">
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="txt_id" readonly="" required=""
                                   value="<?php echo $id; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">frist name</label>
                            <input class="form-control" type="text" name="frist_name" required=""
                                   value=" <?php echo $resu['frist_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">last name</label>
                            <input class="form-control" type="text" name="last_name" required=""
                                   value=" <?php echo $resu['last_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">address</label>
                            <input class="form-control" type="text" name="address" required=""
                                   value=" <?php echo $resu['address']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">email</label>
                            <input class="form-control" type="text" name="email" required=""
                                   value=" <?php echo $resu['email']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">telephone</label>
                            <input class="form-control" type="text" name="telephone" required=""
                                   value=" <?php echo $resu['telephone']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">father_name</label>
                            <input class="form-control" type="text" name="father_name" required=""
                                   value=" <?php echo $resu['father_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">father_teli</label>
                            <input class="form-control" type="text" name="father_teli" required=""
                                   value=" <?php echo $resu['father_teli']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">mother_name</label>
                            <input class="form-control" type="text" name="mother_name" required=""
                                   value=" <?php echo $resu['mother_name']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">mother_teli</label>
                            <input class="form-control" type="text" name="mother_name" required=""
                                   value=" <?php echo $resu['mother_teli']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">birthday</label>
                            <input class="form-control" type="text" name="birthday" required=""
                                   value=" <?php echo $resu['birthday']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">registation_date</label>
                            <input class="form-control" type="text" name="registation_date" required=""
                                   value=" <?php echo $resu['registation_date']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">team_type</label>
                            <input class="form-control" type="text" name="team_type" required=""
                                   value=" <?php echo $resu['team_type']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">coach_name</label>
                            <input class="form-control" type="text" name="coach_name" required=""
                                   value=" <?php echo $resu['coach_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">gender</label>
                            <input class="form-control" type="text" name="gender" required=""
                                   value=" <?php echo $resu['gender']; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">status</label>
                            <input class="form-control" type="text" name="status" readonly="" required=""
                                   value="<?php echo $resu['status']; ?>">
                        </div>

                        <div class="form-group">
                            </br>
                            <label class="control-label">Images </label>
                            <div class="row">
<!--                                --><?php
//                                $sql2 = "SELECT * FROM `image_table`,`product_tbl` WHERE image_table.pro_id=$id AND product_tbl.pro_id=$id";
//                                $result = mysqli_query($connection, $sql2);
//                                while ($rowDa = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col-md-3">
                                        <img src="galleryImg/" width='100%'>
                                    </div>
<!--                                    --><?php
//                                }
//                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="list-products.php"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>