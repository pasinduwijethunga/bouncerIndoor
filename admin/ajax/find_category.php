
<?php
include('../../db/dbConnection.php');
$id = $_GET['id'];

$sql3 = mysqli_query($connection,"SELECT * FROM sub_category_tbl WHERE cat_id = $id");
$row3 = mysqli_num_rows($sql3);
echo "<option value='' disabled selected hidden>Select SubCategory</option>";
while ($row3 = mysqli_fetch_array($sql3)){                                
    echo "<option value='". $row3['sub_cat_id'] ."'>" .$row3['subcat_name'] ."</option>" ;
}
?>