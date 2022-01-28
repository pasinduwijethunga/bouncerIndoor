<?php 
session_start();
include '../db/dbConnection.php';

$name = $mysqli->escape_string($_POST['name']);
$result = $mysqli->query("SELECT * FROM admin_details WHERE admin_name='$name'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User doesn't exist!";
    		header("location: error");
  
  }
  else { // User exists
    $user = $result->fetch_assoc();

    if ($_POST['password'] == $user['admin_pass'] ) {
        
        $_SESSION['admin_name'] = $user['admin_name'];


		header("location:home"); 

      }

    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        	header("location: error");
        // echo "<script type='text/javascript'>goerror()</script>";
    }
}



?>