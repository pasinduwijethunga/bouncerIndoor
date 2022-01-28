<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php'; ?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> UPLOAD IMAGES</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <form action="upload-imagePro.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="form-control" id="cateID" name="category_id" required="">
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
                        <div class="description">
                            <h5>Add Your Image: <span style="color:red;font-size:20px;">*</span></h5>
                            <input type="file" style="width: 100%;" id="imageUpload" name="image[]" multiple="">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<script type="text/javascript">
$('#serviceID').select2();
$('#cateID').select2();
</script>
