<?php
session_start();

 $abfrage31 = $_POST['abfrage31'];
 $abfrage32 = $_POST['abfrage32'];
 $abfrage33 = $_POST['abfrage33'];

 $_SESSION['abfrage31'] =  $abfrage31;
 $_SESSION['abfrage32'] =  $abfrage32;
 $_SESSION['abfrage33'] =  $abfrage33;
 
 
 $_SESSION['ab6'] = "1";
header("location:abschlussfragebogen-7.php");


?>