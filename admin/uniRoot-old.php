<?php
function uniroot($low,$high,$qnorm)
{
    $a=$low;
	$fa =computeObjectiveValue($qnorm,$a);
	$b = $high;
    $fb = computeObjectiveValue($qnorm,$b);
	$c = $a;
	$fc = $fa;
	$d = $b - $a;
	$e = $d;
    $t = pow(10, -6);
    $eps = 2.2204460492503131e-16;
	while (true) {
			if (abs($fc) < abs($fb)) {
				$a = $b;
				$b = $c;
				$c = $a;
				$fa = $fb;
				$fb = $fc;
				$fc = $fa;
			}

			$tol = 2 * $eps * abs($b) + $t;
			$m = 0.5 * ($c - $b);

			if (abs($m) <= $tol || $fb == 0) {
				return $b;
			}
			if (abs($e) < $tol || abs($fa) <= abs($fb)) {
				// Force bisection.
				$d = $m;
				$e = $d;
			} else {
				$s = $fb / $fa;
				// The equality test (a == c) is intentional,
				// it is part of the original Brent's method and
				// it should NOT be replaced by proximity test.
				if ($a == $c) {
					// Linear interpolation.
					$p = 2 * $m * $s;
					$q = 1 - $s;
				} else {
					// Inverse quadratic interpolation.
					$q = $fa / $fc;
					$r = $fb / $fc;
					$p = $s * (2 * $m * $q * ($q - $r) - ($b - $a) * ($r - 1));
					$q = ($q - 1) * ($r - 1) * ($s - 1);
				}
				if ($p > 0) {
					$q = -$q;
				} else {
					$p = -$p;
				}
				$s = $e;
				$e = $d;
				if ($p >= 1.5 * $m * $q - abs($tol * $q) || $p >= abs(0.5 * $s * $q)) {
					// Inverse quadratic interpolation gives a value
					// in the wrong direction, or progress is slow.
					// Fall back to bisection.
					$d = $m;
					$e = $d;
				} else {
					$d = $p / $q;
				}
			}
			$a = $b;
			$fa = $fb;

			if (abs($d) > $tol) {
				$b += $d;
			} else if ($m > 0) {
				$b += $tol;
			} else {
				$b -= $tol;
			}
			$fb = computeObjectiveValue($qnorm, $b);
			if (($fb > 0 && $fc > 0) || ($fb <= 0 && $fc <= 0)) {
				$c = $a;
				$fc = $fa;
				$d = $b - $a;
				$e = $d;
			}

		}
	}

 function computeObjectiveValue($qnorm,$x) {
		$sum1 = 0.0;
		$sum2 = 0.0;
		for ($i = 0; $i < 100; $i++) {
			$sum1 += pow($qnorm[$i], $x);
			$sum2 += pow($qnorm[$i], $x + 1);
		}
		return (pow(1.02, 10) *$sum1 - $sum2);
	}
/*$arr=array(0.4888609,0.6045341, 0.6748205, 0.7291969, 0.7750529, 0.8155087, 0.8522065, 0.8861286,
				0.9179143, 0.9480061, 0.9767240, 1.0043086, 1.0309455, 1.0567817, 1.0819360, 1.1065061, 1.1305736,
				1.1542074, 1.1774667, 1.2004028, 1.2230606, 1.2454798, 1.2676957, 1.2897403, 1.3116424, 1.3334284,
				1.3551225, 1.3767475, 1.3983242, 1.4198725, 1.4414111, 1.4629578, 1.4845299, 1.5061436, 1.5278152,
				1.5495601, 1.5713937, 1.5933311, 1.6153873, 1.6375772, 1.6599158, 1.6824181, 1.7050993, 1.7279748,
				1.7510604, 1.7743721, 1.7979264, 1.8217404, 1.8458315, 1.8702180, 1.8949189, 1.9199540, 1.9453439,
				1.9711105, 1.9972764, 2.0238660, 2.0509046, 2.0784195, 2.1064393, 2.1349948, 2.1641188, 2.1938464,
				2.2242154, 2.2552665, 2.2870437, 2.3195944, 2.3529705, 2.3872282, 2.4224291, 2.4586405, 2.4959366,
				2.5343991, 2.5741188, 2.6151964, 2.6577442, 2.7018886, 2.7477714, 2.7955537, 2.8454188, 2.8975764,
				2.9522686, 3.0097765, 3.0704288, 3.1346139, 3.2027943, 3.2755278, 3.3534945, 3.4375354, 3.5287078,
				3.6283653, 3.7382794, 3.8608305, 3.9993199, 4.1585127, 4.3456451, 4.5724768, 4.8600202, 5.2516361,
				5.8622195, 7.2493252);
echo uniroot(-50,50,$arr);*/