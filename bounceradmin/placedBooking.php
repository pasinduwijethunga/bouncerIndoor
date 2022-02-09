<?php 
    session_start();
    include('../db/dbConnection.php');

    $orderNo = $_POST['orderNo'];
    $bookDate = $_POST['bookDate'];
    $bookFrom = $_POST['bookFrom'];
    $bookTo = $_POST['bookTo'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $nic = $_POST['nic'];
    $doorsId = isset($_POST['doorsId']) && $_POST['doorsId'] ?$_POST['doorsId']:'NULL';
    $machineNormalId = isset($_POST['machineNormalId']) && $_POST['machineNormalId'] ?$_POST['machineNormalId']:'NULL';
    $wicketsId = isset($_POST['wicketsId'])  && $_POST['wicketsId'] ?$_POST['wicketsId']:'NULL';
    $operatorId = isset($_POST['operatorId']) && $_POST['operatorId'] !="" ?$_POST['operatorId']:'NULL';
    mysqli_autocommit($connection, false);
    echo $insertBooking = "INSERT INTO booking
                        (
                            orderNo,
                            orderDate,
                            bookStartTime,
                            bookEndTime,
                            clientName,
                            clientEmail,
                            clientNic,
                            clientMobile,
                            doors,
                            wickets,
                            machineNormal,
                            operator
                        )
                    VALUES
                        (
                            '".$orderNo."',
                            '".$bookDate."',
                            '".$bookFrom."',
                            '".$bookTo."',
                            '".$name."',
                            '".$email."',
                            '".$nic."',
                            '".$mobile."',
                            {$doorsId},
                            {$wicketsId},
                            {$machineNormalId},
                            {$operatorId}
                        )";
    $result = mysqli_query($connection,$insertBooking);

    if($result){
        mysqli_commit($connection);
        $_SESSION['status'] = 'success';
        $_SESSION['msg'] = 'Successfully placed the order';
        $response_array['status'] = 'success';
        echo json_encode($response_array);
        header('Location: add_booking.php');
    }else{
        mysqli_rollback($connection);
        $_SESSION['status'] = 'success';
        $_SESSION['msg'] = 'Failed';
        $response_array['status'] = 'error';
        echo json_encode($response_array);
    }



?>