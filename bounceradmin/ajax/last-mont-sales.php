<?php
include ("../db/dbConnection.php");

$location=$_GET['location'];
$datee = date('Y-m-', strtotime("last month"));


?>

<?php
$result=mysqli_query($connection,"SELECT * FROM pos_tbl,user_tbl,location_tbl WHERE location_tbl.loc_id='$location' AND user_tbl.user_loc='$location' AND pos_tbl.pos_date LIKE '$datee%'");
    while ($dataRow=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td >" . $dataRow['pos_date'] . "</td>";
        echo "<td >" . $dataRow['pos_time'] . "</td>";
        echo "<td >" . $dataRow['added_user'] . "</td>";
        echo "<td >" . $dataRow['customerId'] . "</td>";
        echo "<td >" . $dataRow['refNote'] . "</td>";
        echo "<td >" . $dataRow['proDesc'] . "</td>";
        echo "<td >" . number_format($dataRow['amount'], 2) . "</td>";
        echo "<td >" . $dataRow['payBy'] . "</td>";
        echo "<td >" . $dataRow['payNote'] . "</td>";
        echo "<td >" . $dataRow['secuCode'] . "</td>";
        echo "<td >" . $dataRow['cardNo'] . "</td>";
        echo "<td >" . $dataRow['holdName'] . "</td>";
        echo "<td >" . $dataRow['cardType'] . "</td>";
        echo "<td >" . $dataRow['month'] . "</td>";
        echo "<td >" . $dataRow['year'] . "</td>";
        echo "<td >" . $dataRow['cvv2'] . "</td>";
        echo "<td >" . $dataRow['cheqNo'] . "</td>";
        echo "<td >" . $dataRow['ref_code'] . "</td>";
        echo "<td >" . number_format($dataRow['pro_disc'], 2) . "</td>";
        echo "</tr>";
    }

?>
