<?php
function uniroot($low,$high,$qnorm,$rfree,$horizon)
{
    $a=$low;
	$fa =computeObjectiveValue($qnorm,$a,$rfree,$horizon);
	$b = $high;
    $fb = computeObjectiveValue($qnorm,$b,$rfree,$horizon);
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
			$fb = computeObjectiveValue($qnorm, $b,$rfree,$horizon);
			if (($fb > 0 && $fc > 0) || ($fb <= 0 && $fc <= 0)) {
				$c = $a;
				$fc = $fa;
				$d = $b - $a;
				$e = $d;
			}

		}
	}

 function computeObjectiveValue($qnorm,$x,$rfree,$horizon) {
		$sum1 = 0.0;
		$sum2 = 0.0;
		for ($i = 0; $i < 100; $i++) {
			$sum1 += pow($qnorm[$i], $x);
			$sum2 += pow($qnorm[$i], $x + 1);
		}
		return (pow($rfree,$horizon) *$sum1 - $sum2);

	}
?>