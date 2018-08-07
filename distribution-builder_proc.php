<?php
session_start();
$submitted_data = $_POST['data'];
$_SESSION['submitted_data']= $submitted_data;
$_SESSION['distribution'] = "1";  
//header("location:empfehlung.php");
?>