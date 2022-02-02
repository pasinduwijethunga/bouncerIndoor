<?php
    session_start();
    include('../db/dbConnection.php');

    $type = $_REQUEST['type'];
    $id = $_REQUEST['id'];
    $data = array();
    if($type == 'LOAD_OPTIONS_TYPE'){
        $sql = "SELECT id,type FROM booking_types WHERE parentId='".$id."'";

        $result= mysqli_query($connection,$sql);
        while($row = mysqli_fetch_object($result)){
            array_push($data,$row);
        }

        echo json_encode($data);
    }

    if($type == 'LOAD_OPERATORS'){
        $sql = "SELECT id,type FROM booking_types WHERE parentId='".$id."'";

        $result= mysqli_query($connection,$sql);
        while($row = mysqli_fetch_object($result)){
            array_push($data,$row);
        }

        echo json_encode($data);
    }
?>