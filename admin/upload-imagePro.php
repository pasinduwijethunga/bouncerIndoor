
<?php
include 'header.php';
include '../db/dbConnection.php';
?>
<?php
//include('../galleryImg');
session_start();
$imageName="";

$targetDir = '../admin/galleryImg/';
$allowType = array('jpg', 'png', 'jpeg', 'gif');

$catid = $_POST['category_id'];


//$file_tmp = $_FILES['image']['tmp_name'];
//print_r($file_tmp);
if (!empty(array_filter($_FILES['image']['name']))) {
    foreach ($_FILES['image']['name'] as $key => $value) {

        $fileName = basename($_FILES['image']['name'][$key]);
        $imageName=$fileName;
        $targetFilePath = $targetDir . $fileName;

        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        if (in_array($fileType, $allowType)) {

            if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $targetFilePath)) {
            } else {

            }
        } else {

        }
    }
}


$sql = "INSERT INTO `gallery`(`g_id`, `cat_id`, `image`,`date`) VALUES (
        0,
        '$catid',
        '$imageName',NOW())";

if ($connection->query($sql)==true){?>
<form action="list-image">
    <div class="col-lg-12">
        <div class="bs-component" style="margin-left: 15%;">
            <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Well done!</strong> You successfully Add <a class="alert-link" href="#">this important alert message</a>.
            </div>
        </div>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-success" type="button">Success</button>

    </div>
</form>
<?php } else{?>

    <form action="list-image">
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
<?php
include 'footer.php';
?>

