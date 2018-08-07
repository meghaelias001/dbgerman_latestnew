<?php
session_start();
 $abfrageNew41 = $_POST['abfrage41'];
 $abfrageNew42 = $_POST['abfrage42'];
 $abfrageNew43 = $_POST['abfrage43'];
 $_SESSION['abfrageNew41'] =  $abfrageNew41;
 $_SESSION['abfrageNew42'] =  $abfrageNew42;
 $_SESSION['abfrageNew43'] =  $abfrageNew43; 
 $_SESSION['ab7'] = "1";
header("location:abschlussfragebogen-8.php");
?>