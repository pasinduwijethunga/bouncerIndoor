<?php 
    session_start();
    include('../db/dbConnection.php');

    $data_arr = array();
    $sql_booking = "SELECT 
                        *,
                        ifnull((select type from booking_types where id = b.doors),'') as doors,
                        ifnull((select type from booking_types where id = b.wickets),'') as wickets,
                        ifnull((select type from booking_types where id = b.machineNormal),'') as machineNormal,
                        ifnull((select type from booking_types where id = b.operator),'') as operator
                    FROM 
                        booking b
                    WHERE 
                        status = 1";
    
    $result_booking = mysqli_query($connection,$sql_booking);
    while($rows = mysqli_fetch_object($result_booking)){
        $data['orderNo'] = $rows->orderNo;
        $data['orderDate'] = $rows->orderDate;
        $data['bookStartTime'] = $rows->bookStartTime;
        $data['bookEndTime'] = $rows->bookEndTime;
        $data['clientName'] = $rows->clientName;
        $data['clientEmail'] = $rows->clientEmail;
        $data['clientEmail'] = $rows->clientEmail;
        $data['doors'] = $rows->doors;
        $data['wickets'] = $rows->wickets;
        $data['machineNormal'] = $rows->machineNormal;
        $data['operator'] = $rows->operator;
        $data['url'] = '<a href=".edit-booking.php?id='.$rows->id.'" >Edit</a>';
        array_push($data_arr,$data);
    }

    echo json_encode($data_arr);
?>