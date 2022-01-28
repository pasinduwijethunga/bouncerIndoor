<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bouncer';
$mysqli = new mysqli($host, $user, $pass, $db) or die($mysqli->error);
$connection = mysqli_connect($host, $user, $pass, $db) or die("error DB Finding...");


