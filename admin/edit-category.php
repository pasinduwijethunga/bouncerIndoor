<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';
?>

<?php
    $id =  $_GET['id'];
    $sql ="SELECT * FROM category_tbl WHERE category_id = '$id'";
    $result = mysqli_query($connection,$sql);
    while($dataRow=mysqli_fetch_assoc($result)){
        $category = $dataRow['category_name'];
} ?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> EDIT CATEGORY</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <form action="edit-categoryPro" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label">ID</label>
                            <input class="form-control" type="text" name="txt_id" readonly="" required=""
                                value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category Name</label>
                            <input class="form-control" type="text" name="txt_category" required=""
                                value=" <?php echo $category; ?>">
                        </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Edit
                    </button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="list-category.php">
                        <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </div>
        </div>
        </form>

    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    editor = CKEDITOR.replace('editor1');
    editor.addCommand("mySimpleCommand", {
        exec: function(edt) {
            data = edt.getData();
            edt.setData(data +
                "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
            );
        }
    });
    editor.ui.addButton('SuperButton', {
        label: "Add Table",
        command: 'mySimpleCommand',
        toolbar: 'insert',
        icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
    });
});
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    editor = CKEDITOR.replace('editor3');
    editor.addCommand("mySimpleCommand", {
        exec: function(edt) {
            data = edt.getData();
            edt.setData(data +
                "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
            );
        }
    });
    editor.ui.addButton('SuperButton', {
        label: "Add Table",
        command: 'mySimpleCommand',
        toolbar: 'insert',
        icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
    });
});
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    editor1 = CKEDITOR.replace('editor2');
    editor1.addCommand("mySimpleCommand", {
        exec: function(edt) {
            data = edt.getData();
            edt.setData(data +
                "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
            );
        }
    });
    editor1.ui.addButton('SuperButton', {
        label: "Add Table",
        command: 'mySimpleCommand',
        toolbar: 'insert',
        icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
    });


});
</script>
<script type="text/javascript">
$('#demoSelect').select2();
</script>