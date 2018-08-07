<?php

include_once "admin/dbconfig.php";

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$submitted_data= $_SESSION['submitted_data'];

function calculateMeanSD($inputArray) {

    $meanSum =0;

    foreach ($inputArray as $arr) {

        $meanSum = $meanSum+ $arr['count']* $arr['xAxisValue'];

    }

    $mean=$meanSum/100;

    $variance_sum=0;

    foreach ($inputArray as $arr) {

        $variance = pow($arr['xAxisValue']- $mean,2)* $arr['count'];

        $variance_sum = $variance_sum + $variance;

    }

    $sd=sqrt($variance_sum/99);

    return array($mean, $sd);

}



function extractDist($inputArray) {

    $meanSum =0;

	$dist_det = array();

    foreach ($inputArray as $arr) {

        //$meanSum = $meanSum+ $arr['count']* $arr['xAxisValue'];

		for($i = 0 ; $i<$arr['count']; $i++)

		{

			array_push($dist_det,$arr['xAxisValue']);

		}

		

    }

    return $dist_det;

}

function linear_regression($x, $y) {

  // calculate number points

  $n = count($x);

  //echo 'n'.$n.'y'.count($y);

  //print_r($y);

  // ensure both arrays of points are the same size

  if ($n != count($y)) {

    trigger_error("linear_regression(): Number of elements in coordinate arrays do not match.", E_USER_ERROR);

  }

  // calculate sums

  $x_sum = array_sum($x);

  $y_sum = array_sum($y);

  $xx_sum = 0;

  $xy_sum = 0;

  $yy_sum = 0;

  for($i = 0; $i < $n; $i++) {

    $xy_sum+=($x[$i]*$y[$i]);

    $xx_sum+=($x[$i]*$x[$i]);

    $yy_sum+=($y[$i]*$y[$i]);

  } 

  

  $divisor1 = (($n * $xx_sum)-($x_sum * $x_sum));

  if ($divisor1 == 0) 

	  $m = 0;

  else 

	  $m = (($n * $xy_sum)-($x_sum * $y_sum)) / $divisor1;

  // calculate slope

  //$m = (($n * $xy_sum) - ($x_sum * $y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));  

  // calculate intercept

  $b = ($y_sum - ($m * $x_sum)) / $n;

   // calculate r

   

   $divisor2=sqrt((($xx_sum)-((1/$n)*(pow($x_sum,2))))*(($yy_sum)-((1/$n)*(pow($y_sum,2)))));

   if ($divisor2 == 0) 

	  $r = 0;

  else 

  $r = ($xy_sum - ((1/$n)*$x_sum*$y_sum))/$divisor2;

  $r2 = $r*$r;

    // return result

return array($m,$b,$r,$r2);

}





$headers = array('Date', 'ID', 'Group');

for ($i = 1; $i <= 100; $i++) {

    $headers[$i + 2] = 'state_price'.$i;

}

$headers[103] = 'Budget';

$headers[104] = 'TimeTaken';

$headers[105] = 'Mean';

$headers[106] = 'SD';

$headers[107] = 'RecommendedDistribution';



$headers[108] = 'Satisfaction1';

$headers[109] = 'Satisfaction2';

$headers[110] = 'Satisfaction3';

$headers[111] = 'Satisfaction4';

$headers[112] = 'Satisfaction5';



$headers[113] = 'Abschlussfragebogen11';

$headers[114] = 'Abschlussfragebogen12';

$headers[115] = 'Abschlussfragebogen13';

$headers[116] = 'Abschlussfragebogen14';

$headers[117] = 'Abschlussfragebogen15';

$headers[118] = 'Abschlussfragebogen16';



$headers[119] = 'LotteryValue1';

$headers[120] = 'LotteryValue2';

$headers[121] = 'LotteryValue3';

$headers[122] = 'LotteryValue4';

$headers[123] = 'LotteryValue5';

$headers[124] = 'LotteryValue6';

$headers[125] = 'LotteryValue7';

$headers[126] = 'LotteryValue8';

$headers[127] = 'LotteryValue9';

$headers[128] = 'LotteryValue10';



$headers[129] = 'GneezyTask';

$headers[130] = 'Abschlussfragebogen5';



$headers[131] = 'Literacy1';

$headers[132] = 'Literacy2';

$headers[133] = 'Literacy3';



$headers[134] = 'Literacy4';

$headers[135] = 'Literacy5';

$headers[136] = 'Literacy6';



$headers[137] = 'Literacy7';

$headers[138] = 'Literacy8';

$headers[139] = 'Literacy9';

$headers[140] = 'Literacy10';

$headers[141] = 'Literacy11';





$headers[142] = 'Age';

$headers[143] = 'Sex';

$headers[144] = 'Income';

$headers[145] = 'Savings';

$headers[146] = 'Place';

$headers[147] = 'CRRA';

$headers[148] = 'R2';

$headers[149] = 'IP';

$column = 'A';

$date = date('d-m-Y');

$statePriceArray=$submitted_data['statepriceArray'];

//$setPriceArray=$_SESSION['state_price'];

$result=$db->query("select MAX(id) AS id from files");

if(count($result)>0)

{

	$id = (int)$result[0]["id"]+1;

}

else 

{

	$id=1;

}

$distribution = $submitted_data['distribution'];

//$random_no=rand(100000, 999999);

$tempArray = array($date,$id, 'DistributionBuilder');

foreach ($distribution as $dist) {

    $j = count($tempArray);

    for ($i = $j; $i < $j + $dist['count']; $i++) {

        $tempArray[$i] = $dist['xAxisValue'];

    }

}


$ipaddress=get_client_ip();
$sd=calculateMeanSD($distribution);

$dist_det = extractDist($distribution);

$reg=linear_regression($statePriceArray,$dist_det);

$setPriceArray = $tempArray;

$setPriceArray[103] = $submitted_data['budget'];

$setPriceArray[104] = $submitted_data['timeTaken'];

$setPriceArray[105] = $sd[0];

$setPriceArray[106] = $sd[1];

$setPriceArray[107] = $submitted_data['optimised_value'];





$setPriceArray[108] = $_SESSION['abfrageNew11'];

$setPriceArray[109] = $_SESSION['abfrageNew12'];

$setPriceArray[110]=  $_SESSION['abfrageNew13'];

$setPriceArray[111] = $_SESSION['abfrageNew14'];

$setPriceArray[112] = $_SESSION['abfrageNew15'];



$setPriceArray[113] = $_SESSION['abfrage21'];//NEW ADDITION

$setPriceArray[114] = $_SESSION['abfrage1'];

$setPriceArray[115] = $_SESSION['abfrage2'];

$setPriceArray[116] = $_SESSION['abfrage3'];

$setPriceArray[117] = $_SESSION['abfrage4'];

$setPriceArray[118] = $_SESSION['abfrage5'];



$setPriceArray[119] = $_SESSION['lotteryRow1'];//'Lottery Row 1 Selected Value';

$setPriceArray[120] = $_SESSION['lotteryRow2'];//'Lottery Row 2 Selected Value';

$setPriceArray[121] = $_SESSION['lotteryRow3'];//'Lottery Row 3 Selected Value';

$setPriceArray[122] = $_SESSION['lotteryRow4'];//'Lottery Row 4 Selected Value';

$setPriceArray[123] = $_SESSION['lotteryRow5'];//'Lottery Row 5 Selected Value';

$setPriceArray[124] = $_SESSION['lotteryRow6'];//'Lottery Row 6 Selected Value';

$setPriceArray[125] = $_SESSION['lotteryRow7'];//'Lottery Row 7 Selected Value';

$setPriceArray[126] = $_SESSION['lotteryRow8'];//'Lottery Row 8 Selected Value';

$setPriceArray[127] = $_SESSION['lotteryRow9'];//'Lottery Row 9 Selected Value';

$setPriceArray[128] = $_SESSION['lotteryRow10'];

//'Lottery Row 10 Selected Value';

$setPriceArray[129] = $_SESSION['euro'];



$setPriceArray[130] = $_SESSION['abfrageNew2'];



$setPriceArray[131] =  $_SESSION['abfrage31'];

$setPriceArray[132] =  $_SESSION['abfrage32'];

$setPriceArray[133] =  $_SESSION['abfrage33'];



$setPriceArray[134] =  $_SESSION['abfrageNew41'];

$setPriceArray[135] =  $_SESSION['abfrageNew42'];

$setPriceArray[136] =  $_SESSION['abfrageNew43'];



$setPriceArray[137] =  $_SESSION['abfrageNew51'];

$setPriceArray[138] =  $_SESSION['abfrageNew52'];

$setPriceArray[139] =  $_SESSION['abfrageNew53'];

$setPriceArray[140] =  $_SESSION['abfrageNew54'];

$setPriceArray[141] =  $_SESSION['abfrageNew55'];



$setPriceArray[142] = $_SESSION['age'];

$setPriceArray[143] = $_SESSION['sex'];

$setPriceArray[144] = $_SESSION['yearlyIncome'];

$setPriceArray[145] = $_SESSION['privateSavings'];

$setPriceArray[146] = $_SESSION['lebensmittelpunkt'];

$setPriceArray[147] = $reg[1];

$setPriceArray[148] = $reg[3];

$setPriceArray[149] =  $ipaddress;

//$_SESSION['random_no']  = $random_no;

$filename = "user-files/DBuilderUser" . $date . date('-H-i-s-') . $id . '.csv';

$file = fopen($filename, 'w+');

fputcsv($file, $headers, ',');

fputcsv($file, $setPriceArray, ',');

fclose($file);

$dataArray = array('filename' => $filename);

#if(isset($_SESSION['ab9'])){

  $db->insert('files', $dataArray);

  header("location:finalScreen.php");
?>