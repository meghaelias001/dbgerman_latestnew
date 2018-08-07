<?php
session_start();

 $abfrageNew11 = $_POST['slider1'];
 $abfrageNew12 = $_POST['slider2'];
 $abfrageNew13 = $_POST['slider3'];
 $abfrageNew14 = $_POST['slider4'];
 $abfrageNew15 = $_POST['slider5'];
 $_SESSION['abfrageNew11'] =  $abfrageNew11  ;
 $_SESSION['abfrageNew12'] =  $abfrageNew12  ;
 $_SESSION['abfrageNew13'] =  $abfrageNew13  ;
 $_SESSION['abfrageNew14'] =  $abfrageNew14  ;
 $_SESSION['abfrageNew15'] =  $abfrageNew15  ;
 $_SESSION['ab1'] = "1";
   
 header("location:abschlussfragebogen-2.php");


?>