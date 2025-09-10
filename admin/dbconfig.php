<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Kolkata');
$dt = date("d M Y h:i a");


$host='localhost';
$dbuser='root';
$dbpwd='';
$db='lab_project';
$con=mysqli_connect($host,$dbuser,$dbpwd,$db);


?>