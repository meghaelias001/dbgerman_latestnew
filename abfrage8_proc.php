<?php
session_start();
 $abfrage51 = $_POST['abfrageNew51'];
 $abfrage52 = $_POST['abfrageNew52'];
 $abfrage53 = $_POST['abfrageNew53'];
 $abfrage54 = $_POST['abfrageNew54'];
 $abfrage55 = $_POST['abfrageNew55'];
 $_SESSION['abfrageNew51'] =  $abfrage51;
 $_SESSION['abfrageNew52'] =  $abfrage52;
 $_SESSION['abfrageNew53'] =  $abfrage53;
 $_SESSION['abfrageNew54'] =  $abfrage54;
 $_SESSION['abfrageNew55'] =  $abfrage55;
 $_SESSION['ab8'] = "1";
 header("location:abschlussfragebogen-9.php");


?>