<?php
    include('../db/dbConnection.php');
?>
<?php
    session_start();

    $data = (array) $_POST['data'];

    $grade = $data['grade'];
    $packName = $data['packName'];
    $discount = $data['discount'];
    $price = $data['price'];

    $user = $_SESSION['user_id'];
    $location = $_SESSION['user_loc'];
    $date = date("m/d/Y");

    mysqli_autocommit($connection, false);

    $addedData = true;

    $select="SELECT MAX(pack_id) AS max_id FROM pack_tbl";
    $result= mysqli_query($connection,$select);
    $dataRow=mysqli_fetch_array($result);
    $dataRow = ++$dataRow['max_id'];

    $query = "INSERT INTO pack_tbl(`pack_id`,`pack_name`,`pack_grade`,`pack_disc`,`added_date`,`added_user`,`price`)VALUES(
        '',
        '$packName',
        '$grade',
        '$discount',
        '$date',
        '$user',
        '$price')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        for ($x = 0; $x < count($data['proObj']); $x++) {
    
            $stockId = $data['proObj'][$x]['id'];
            $proCode = $data['proObj'][$x]['code'];
            $proName = $data['proObj'][$x]['proName'];
            $price = $data['proObj'][$x]['price'];
            $totQty = $data['proObj'][$x]['totQty'];
    
            $query2 = "INSERT INTO packDetail_tbl(`packDetail_id`,`packDetail_name`,`packDetail_qty`,`packDetail_price`,`packRef_id`)VALUES(
                '',
                '$proName',
                '$totQty',
                '$price',
                '$dataRow')";
    
            $result2 = mysqli_query($connection, $query2);
    
            if (!$result2) {
                mysqli_rollback($connection);
                $response_array['status'] = 'error';
                echo json_encode($response_array);
                $addedData = false;
                break;
            }
        }
    }else {
        mysqli_rollback($connection);
        $response_array['status'] = 'error';
        echo json_encode($response_array);
    }

    
    if ($addedData) {
        mysqli_commit($connection);
        $response_array['status'] = 'success';
        echo json_encode($response_array);  
    }
?>