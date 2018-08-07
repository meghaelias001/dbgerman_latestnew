<?php
session_start();
 $euro = $_POST['euro'];
 $_SESSION['euro'] = $euro;
 $_SESSION['ab4'] = "1";
header("location:abschlussfragebogen-5.php");
?>