<?php include 'header.php'; ?>

<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';

$select = 'SELECT MAX(pro_id) AS max_id FROM product_tbl';
$result = mysqli_query($connection, $select);
$dataRow = mysqli_fetch_array($result);
$dataRow = ++$dataRow['max_id'];
?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> ADD PRODUCT</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <form action="add-productPro" method="post" enctype="multipart/form-data">
                        <div class="form-group" style="display:none;">
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="txt_id" readonly="" required=""
                                value="<?php echo $dataRow; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Product Name</label>
                            <input class="form-control" type="text" name="txt_pname" required="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="form-control" id="categoryID" name="category_id" required=""
                                onchange="getCategory()">
                                <option value="" disabled selected hidden>Select Category</option>
                                <?php
                                    $sql = mysqli_query($connection,"SELECT * FROM category_tbl");
                                    $row = mysqli_num_rows($sql);
                                        while ($row = mysqli_fetch_array($sql)){                                
                                            echo "<option value='". $row['category_id'] ."'>" .$row['category_name'] ." </option>" ;
                                        }
                                ?>
                            </select>
                        </div>
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Sub Category</label>-->
<!--                            <select class="form-control" id="subCateID" name="subCate_id" required="">-->
<!---->
<!--                            </select>-->
<!--                        </div>-->

                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea class="form-control" name="txt_pdesc"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input class="form-control" type="number" name="txt_pprice" required="">
                        </div>

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Fabric</label>-->
<!--                            <input class="form-control" type="text" name="txt_pfabrick" required="">-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Color</label>-->
<!--                            <input class="form-control" type="text" name="txt_pcolor" required="">-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Weight</label>-->
<!--                            <input class="form-control" type="text" name="txt_pweight" required="">-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Material</label>-->
<!--                            <input class="form-control" type="text" name="txt_pmate" required="">-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Size</label>-->
<!--                            <input class="form-control" type="text" name="txt_psize" required="">-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Delivered Day</label>-->
<!--                            <input class="form-control" type="text" name="txt_pdeDay" required="">-->
<!--                        </div>-->

                        <div class="form-group">
                            <label class="control-label">Product image</label>
                            <input class="form-control" type="file" name="image[]" multiple="">
                        </div>

<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pmess">-->
<!--                            <label class="control-label"> add Message</label>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pimage">-->
<!--                            <label class="control-label"> add Image</label>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <input type="checkbox" name="txt_pfont">-->
<!--                            <label class="control-label"> add Font</label>-->
<!--                        </div>-->

                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add
                        Product</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </div>
        </div>
        </form>

    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>

<!-- <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> -->

<script type="text/javascript">
// $('#demoSelect').select2();
</script>
<!--<script type="text/javascript">-->
<!--function getCategory() {-->
<!---->
<!--    var serviceId = document.getElementById('categoryID').value;-->
<!---->
<!--    xmlhttp = new XMLHttpRequest();-->
<!---->
<!--    xmlhttp.onreadystatechange = function() {-->
<!--        if (this.readyState == 4 && xmlhttp.status == 200) {-->
<!--            var respons = xmlhttp.responseText.trim();-->
<!--            document.getElementById('subCateID').innerHTML = this.responseText;-->
<!--        }-->
<!--    }-->
<!--    xmlhttp.open("GET", "ajax/find_category.php?id=" + serviceId, true);-->
<!--    xmlhttp.send();-->
<!--}-->
<!--</script>-->