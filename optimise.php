<?php
/**
 * Created by PhpStorm.
 * User: GIRI
 * Date: 01-05-2017
 * Time: 11:57
 */
require_once "admin/dbconfig.php";
function test($del, $mean_db, $sd_db)
{
    global $db;
    $results = $db->getOne('state_price');
    $rfree_return = $results['free_return'];
    $market_return = $results['market_return'];
    $market_sd = $results['market_sd'];
    $horizon = $results['horizon'];
    $total_rfree_return = pow((1 + $rfree_return), $horizon);
    $total_market_return = pow((1 + $market_return), $horizon);
    $total_market_sd = $market_sd * sqrt($horizon);
    $loss = pow($del * $total_market_return + (1 - $del) * $total_rfree_return - $mean_db / 100, 2)
        + pow(sqrt(($del * $del) * ($total_market_sd * $total_market_sd)) - $sd_db / 100, 2);
    return $loss;
}

function optimise($a, $b, $tol = 0.00001, $mean, $sd)
{
    $ratio = 2 / (sqrt(5) + 1);
    $x1 = $b - ($ratio * ($b - $a));
    $x2 = $a + ($ratio * ($b - $a));
    $f1 = test($x1, $mean, $sd);
    $f2 = test($x2, $mean, $sd);
    while (abs($b - $a) > $tol) {
        if ($f2 > $f1) {
            $b = $x2;
            $x2 = $x1;
            $f2 = $f1;
            $x1 = $b - $ratio * ($b - $a);
            $f1 = test($x1, $mean, $sd);
        } else {
            $a = $x1;
            $x1 = $x2;
            $f1 = $f2;
            $x2 = $a + $ratio * ($b - $a);
            $f2 = test($x2, $mean, $sd);
        }
    }
    return (($a + $b) / 2);
}

$mean = $_POST['mean'];
$sd = $_POST['sd'];
$optimise_value = optimise(0, 1, 0.00001, $mean, $sd) * 100;
echo number_format($optimise_value, 0);