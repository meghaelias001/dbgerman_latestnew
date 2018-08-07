<?php
session_start();

 $abfrageNew2 = $_POST['abfrageNew2'];
 $_SESSION['abfrageNew2'] =  $abfrageNew2  ;
 $_SESSION['ab5'] = "1";
 header("location:abschlussfragebogen-6.php");


?>