<?php
ini_set('memory_limit','512M');
session_start();
$empresa         = "Gran Hotel Valdocco";
$localIP         = $_SERVER['REMOTE_ADDR'];
$usua            = $_SESSION['name'];
$tipou           = $_SESSION['tipou'];

$DATABASE_HOST   = 'localhost';
$DATABASE_USER   = 'root';
$DATABASE_PASS   = 'abcd1234';
$DATABASE_NAME   = 'hoteles';
$conn            =  mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

date_default_timezone_set('America/El_Salvador');
$hoy             = date("Y-m-d H:i:s");
?>