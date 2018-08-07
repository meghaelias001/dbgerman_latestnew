<?php
session_start();

 $lotteryRow1 = $_POST['lotteryRow1'];
 $lotteryRow2 = $_POST['lotteryRow2'];
 $lotteryRow3 = $_POST['lotteryRow3'];
 $lotteryRow4 = $_POST['lotteryRow4'];
 $lotteryRow5 = $_POST['lotteryRow5'];
 $lotteryRow6 = $_POST['lotteryRow6'];
 $lotteryRow7 = $_POST['lotteryRow7'];
 $lotteryRow8 = $_POST['lotteryRow8'];
 $lotteryRow9 = $_POST['lotteryRow9'];
 $lotteryRow10 =$_POST['lotteryRow10'];
 
 $_SESSION['lotteryRow1'] = $lotteryRow1;
 $_SESSION['lotteryRow2'] = $lotteryRow2;
 $_SESSION['lotteryRow3'] = $lotteryRow3;
 $_SESSION['lotteryRow4'] = $lotteryRow4;
 $_SESSION['lotteryRow5'] = $lotteryRow5;
 $_SESSION['lotteryRow6'] = $lotteryRow6;
 $_SESSION['lotteryRow7'] = $lotteryRow7;
 $_SESSION['lotteryRow8'] = $lotteryRow8;
 $_SESSION['lotteryRow9'] = $lotteryRow9;
 $_SESSION['lotteryRow10']= $lotteryRow10;
 
 
 //$_SESSION['euro'] = $euro;
  $_SESSION['ab3'] = "1";
header("location:abschlussfragebogen-4.php");


?>