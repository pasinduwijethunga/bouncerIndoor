<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'bouncer';

// $host = 'localhost';
// $user = 'skyydigi_skypos';
// $pass = 'skyydigi_skypos';
// $db   = 'skyydigi_skypos';

$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

$connection= mysqli_connect($host,$user,$pass,$db) or die("error finding DB");

?>