<?php
include 'header.php';
include '../db/dbConnection.php';
    $image_name = '';
    $image = $_FILES['image']['name'];

    $product_id = $_POST['txt_id'];
    $product_name = $_POST['txt_pname'];
    $product_cat = $_POST['category_id'];
    $product_sub_cat = $_POST['subCate_id'];
//    $product_description = $_POST['txt_pdesc'];
    $product_prise = $_POST['txt_pprice'];


    if(!isset($_POST['txt_pmess'])) {
        $product_message = 0;
    }else{
        $product_message = 1;
    }
    if(!isset($_POST['txt_pimage'])) {
        $product_image = 0;
    }else{
        $product_image = 1;
    }
    if(!isset($_POST['txt_pfont'])) {
        $product_font = 0;
    }else{
        $product_font = 1;
    }

    $result=0;

    $targetDir = 'galleryImg/';
    $allowType = array('jpg', 'png', 'jpeg', 'gif');

$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if (!empty(array_filter($_FILES['image']['name']))) {
        foreach ($_FILES['image']['name'] as $key => $value) {
            $fileName = basename($_FILES['image']['name'][$key]);
            $targetFilePath = $targetDir.$fileName;

            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if (in_array($fileType, $allowType)) {
                if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $targetFilePath)) {
                    $insertValuesSQL .= "('','$product_cat',now(),'$fileName'),";
                } else {
                    $errorUpload .= $_FILES['image']['name'][$key].', ';
                }
            } else {
                $errorUploadType .= $_FILES['image']['name'][$key].', ';
            }
        }

        if (!empty($insertValuesSQL)) {
            $insertValuesSQL = trim($insertValuesSQL, ',');
            $insert = $connection->query("INSERT INTO product_tbl(`pro_id`,`pro_name`,`pro_catid`,`pro_prise`,`pro_description`,`pro_message`,`pro_image`,`pro_font`) VALUES 
                                            (
                                            0,
                                            '$product_name',
                                            $product_cat,
                                            $product_prise,
                                            '0',
                                            1,
                                            1,
                                            1
                                            )");

            if ($insert == 1) {
                foreach ($_FILES['image']['name'] as $key => $value) {
                    $name = basename($_FILES['image']['name'][$key]);
                    $result = $connection->query("INSERT INTO image_table(`image_id`,`pro_id`,`image_name`,`date`,`main_image`,`status`) VALUES (0,$product_id,'$name','',1,1)");
                }
            }
        }
    }
    ?>

    <main class="app-content">

<?php  if ($result == 1) {
        ?>
<form action="list-products">
    <div class="col-lg-12">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
                <button class="close"  type="button" data-dismiss="alert">×</button><strong>Successfully
                    Added!</strong> </a>.
            </div>
        </div>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-success" type="button">Success</button>
    </div>
</form>
<?php
    } else {
        ?>

<form action="add-product">
    <div class="col-lg-12">
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Oh snap!</strong><a
                    class="alert-link" href="#">Change a few things up</a> and try submitting again.
            </div>
        </div>
    </div>
    <div align="center">
        <button type="submit"  class="btn btn-danger" type="button">Re - try</button>
    </div>
</form>

<?php
    }
?>



</main>


    <?php
    include 'footer.php';
    ?>