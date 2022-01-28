<?php
include '../db/dbConnection.php';
if ($_POST['action'] === "add") {
    $location = "";
    $create_image_name = "";
    $slip_image_name = "";
    if (isset($_FILES['pict'])) {
        $image_profile_brake = explode('.', $_FILES['pict']['name']);
        $profile_image_extension = end($image_profile_brake);
        $create_image_name = rand(100, 999) . '.' . $profile_image_extension;
        $location = "../galleryImg/" . $create_image_name;
        $res = move_uploaded_file($_FILES['pict']['tmp_name'], $location);
        if (isset($_FILES['slip'])) {
            $get_slip_image_exeten = explode('.', $_FILES['slip']['name']);
            $slip_image_extension = end($get_slip_image_exeten);
            $slip_image_name = rand(100, 999) . '.' . $slip_image_extension;
            $location = "../galleryImg/" . $slip_image_name;
            $res_2 = move_uploaded_file($_FILES['slip']['tmp_name'], $location);
            if ($res_2 == 1) {
                $firstName = $_POST['fName'];
                $lastName = $_POST['lName'];
                $address = $_POST['Raddesss'];
                $email = $_POST['mail'];
                $telephone = $_POST['tp'];
                $fatherName = $_POST['fafName'];
                $fatherTele = $_POST['fTelep'];
                $motherName = $_POST['mNamas'];
                $motherTele = $_POST['mTelep'];
                $birthDay = $_POST['bDay'];
                $registerDay = $_POST['reRegistationDay'];
                $teamType = $_POST['Ttype'];
                $coachName = $_POST['CName'];
                $insert_register_sql = "INSERT INTO `registation`(`register_id`, `frist_name`, `last_name`, `address`, `email`, `telephone`, `father_name`, `father_teli`, `mother_name`, `mother_teli`, `birthday`, `registation_date`, `team_type`, `coach_name`, `gender`,`status`) VALUES (
                                        0,
                                        '$firstName',
                                        '$lastName',
                                        '$address',
                                        '$email',
                                        '$telephone',
                                        '$fatherName',
                                        '$fatherTele',
                                        '$motherName',
                                        '$motherTele',
                                        '$birthDay',
                                        '$registerDay',
                                        '$teamType',
                                        '$coachName',
                                        'mail',
                                        'Request' )";
                $runQeary = mysqli_query($connection, $insert_register_sql);
                $last_id = mysqli_insert_id($connection);
                if ($runQeary == '1') {
                    $insert_profile_pic_sql = "INSERT INTO `profile_pictures`(`pro_pic_id`, `image_name`, `register_id`, `status`) VALUES (
                                        0,
                                        '$create_image_name',
                                        $last_id,
                                        'live')";
                    $run_profile_image_quary = mysqli_query($connection, $insert_profile_pic_sql);
                    if ($run_profile_image_quary == '1') {
                        $slip_image_sql = "INSERT INTO `payment_slip_image`(`slip_id`, `slipe_image_name`, `register_id`, `status`) VALUES (
                                        0,
                                        '$slip_image_name',
                                        $last_id,
                                        'live')";
                        $run_slip_image_quary = mysqli_query($connection, $slip_image_sql);
                        sendmail();
                        $response_array["status"] = "success";
                        echo json_encode($response_array);
                    }else{
                        $response_array["status"] = "Registration Fail";
                        echo json_encode($response_array);
                    }
                }

            } else {
                $response_array["status"] = "slip image upload fail";
                echo json_encode($response_array);
            }
        } else {

            $response_array["status"] = "plead slip image is required...";
            echo json_encode($response_array);
        }

    } else {

        $response_array["status"] = "profile picture upload unsuccessful...";
        echo json_encode($response_array);
    }
} else {
    $response_array["status"] = "Operation fail....";
    echo json_encode($response_array);
}

function sendmail(){
    return true;
}