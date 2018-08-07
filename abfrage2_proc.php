<?php
session_start();
 $abfrage21= $_POST['abfrage21'];
 $abfrage1 = $_POST['abfrage1'];
 $abfrage2 = $_POST['abfrage2'];
 $abfrage3 = $_POST['abfrage3'];
 $abfrage4 = $_POST['abfrage4'];
 $abfrage5 = $_POST['abfrage5'];
 
 $_SESSION['abfrage21'] = $abfrage21 ;
 $_SESSION['abfrage1'] =  $abfrage1  ;
 $_SESSION['abfrage2'] =  $abfrage2  ;
 $_SESSION['abfrage3'] =  $abfrage3  ;
 $_SESSION['abfrage4'] =  $abfrage4  ;
 $_SESSION['abfrage5'] =  $abfrage5  ;
 $_SESSION['ab2'] = "1";
 header("location:abschlussfragebogen-3.php");


?>