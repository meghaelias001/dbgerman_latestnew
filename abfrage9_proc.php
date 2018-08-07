<?php
session_start();
 $age = $_POST['age'];
 $sex = $_POST['sex'];
 $yearlyIncome = $_POST['yearlyIncome'];
 $privateSavings = $_POST['privateSavings'];
 $lebensmittelpunkt = $_POST['lebensmittelpunkt'];
 $_SESSION['sex'] = $sex;
 $_SESSION['age'] = $age;
 $_SESSION['yearlyIncome'] = $yearlyIncome;
 $_SESSION['privateSavings'] = $privateSavings;
 $_SESSION['lebensmittelpunkt'] = $lebensmittelpunkt;
 //$_SESSION['ab9'] = "1";  
 header("location:export-excel.php");
?>