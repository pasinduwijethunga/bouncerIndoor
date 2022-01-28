<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';
?>

<?php
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM `product_tbl` WHERE pro_id= $id";
    $result = mysqli_query($connection, $sql);
    while ($dataRow = mysqli_fetch_assoc($result)) {
        $name = $dataRow['pro_name'];
        $cat_id = $dataRow['pro_catid'];
        $sub_cat_id = $dataRow['pro_sub_id'];
        $pro_prise = $dataRow['pro_prise'];
//        $pro_color = $dataRow['pro_color'];
        $pro_description = $dataRow['pro_description'];
//        $pro_fabrick = $dataRow['pro_fabrick'];
    } ?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> EDIT CATEGORY</h1>
        </div>
    </div>
    <div class="row">
        <form action="edit-productPro" method="post" enctype="multipart/form-data">
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
                            <label class="control-label">Product Name</label>
                            <input class="form-control" type="text" name="txt_name" required=""
                                value=" <?php echo $name; ?>">
                        </div>

                        <?php
                            $sql = "SELECT * FROM category_tbl WHERE category_id= '$cat_id'";
                            $result = mysqli_query($connection, $sql);
                             $data = mysqli_fetch_assoc($result);
                        ?>
                        <div class="form-group">
                            <label class="control-label">Category Name</label>
                            <input class="form-control" type="text" name="txt_category" required=""
                                value=" <?php echo $data['category_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Product Price</label>
                            <input class="form-control" type="text" name="txt_price" required=""
                                value=" <?php echo $pro_prise; ?>">
                        </div>


                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input class="form-control" type="text" name="txt_descrip" required=""
                                value=" <?php echo $pro_description; ?>">
                        </div>



                        <div class="form-group">
                            </br>
                            <label class="control-label">Images </label>
                            <div class="row">
                                <?php
                                $sql2 = "SELECT * FROM `image_table`,`product_tbl` WHERE image_table.pro_id=$id AND product_tbl.pro_id=$id";
                                $result = mysqli_query($connection, $sql2);
                                while ($rowDa = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-3">
                                    <img src="galleryImg/<?php echo $rowDa['image_name'] ?>" width='100%'>
                                </div>
                                <?php
                                }
                                ?>
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