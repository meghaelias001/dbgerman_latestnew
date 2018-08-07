<?php
require_once 'dbconfig.php';
if (!isset($_SESSION['user_details'])) {
    header('location: index.php');
    exit();
}
function generateSequence($start, $count, $diff)
{
    $arr = array();
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $start;
        $start = $start + $diff;
    }
    return $arr;
}


function calculateStatePrice($rFree_return, $market_return, $market_sd, $horizon)
{
    $v = pow($market_sd, 2);
    $u = 1 + $market_return;
    $r = 1 + $rFree_return;
    # Mean and SD of stock return for one year asssuming a lognormal distribution
    $logSd = sqrt(log($v / pow($u, 2) + 1));
    $logM = 0.5 * log(pow($u, 2) / exp(pow($logSd, 2)));
    $sequence = generateSequence(0.005, 100, 0.01);
    $logWs = array();
    $ws = array();
    foreach ($sequence as $item) {
        $logWs[] = number_format(qnorm($item, $horizon * $logM, sqrt($horizon) * $logSd), 9);
    }
    foreach ($logWs as $value) {
        $ws[] = number_format(exp($value), 9);
    }
    $sum = 0;
    $b = uniroot(-50, 50, $ws, $r, $horizon);
    foreach ($ws as $val) {
        $sum = $sum + pow($val, $b+1);
    }
    $a = log(1/($sum));
    $statePrice = array();
    foreach ($logWs as $myVal) {
        $statePrice[]=number_format(exp($a+$b*$myVal), 9);
    }
    return $statePrice;
}

$message = '';
if (isset($_POST['update'])) {
    require_once "uniRoot.php";
    require_once "qNorm.php";
    $market_sd = $_POST['market_sd'];
    $free_return = $_POST['free_return'];
    $market_return = $_POST['market_return'];
    $horizon = $_POST['horizon'];
    $statePriceArray = calculateStatePrice($free_return, $market_return, $market_sd, $horizon);
    $statePriceString = implode(',', $statePriceArray);
    $db->where('id', 1);
    $array = array('market_sd' => $market_sd,
        'free_return' => $free_return,
        'market_return' => $market_return,
        'horizon' => $horizon, 'state_price_string' => $statePriceString);
    $db->update('state_price', $array);
    $message = 'Updated Successfully..!';
}
$result = $db->getOne('state_price');
?>
<html>
<head>
    <title>
        Administrator
    </title>
    <link rel="stylesheet" href="admin_styles.css">
</head>
<body>
<div class="center width-500">
    <div class="content">
        <h3>Set Data</h3>
        <a class="align-right" href="view-application.php"><h4>View Applications</h4></a>
        <form name="login" action="set-data.php" method="post">
            <div class="left">
                <div class="form-row">
                    <label>Market SD</label>
                </div>
                <div class="form-row">
                    <label>Market Return</label>
                </div>
                <div class="form-row">
                    <label>Free Return</label>
                </div>
                <div class="form-row">
                    <label>Horizon</label>
                </div>
            </div>
            <div class="right">
                <div class="form-row">
                    <input type="text" name="market_sd" value="<?php echo $result['market_sd']; ?>"
                           placeholder="Market SD">
                </div>
                <div class="form-row">
                    <input type="text" name="market_return" value="<?php echo $result['market_return']; ?>"
                           placeholder="Market Return">
                </div>
                <div class="form-row">
                    <input type="text" name="free_return" value="<?php echo $result['free_return']; ?>"
                           placeholder="Free Return">
                </div>
                <div class="form-row">
                    <input type="text" name="horizon" value="<?php echo $result['horizon']; ?>" placeholder="Horizon">
                </div>
            </div>

            <div class="form-row">
                <input type="submit" name="update" value="Update">
                <p> <?php echo $message; ?></p>
            </div>
        </form>
    </div>

</div>
</body>
</html>

