<?php

/**
 * Bisection
 * The Bisection Function
 * @param array $pol The array that represent the polynomial function, in the form array( 'grade' => 'coefficient' );
 * @param int $a Inferior limit
 * @param int $b Superior limit
 * @param real $precision Root precision
 * @param int $loop 
 * @return float The root
 */
function bisection( array $pol, $a, $b, $precision = 0.01, $loop = 100 ){

	do{
		$c = ( $a + $b ) / 2;
		
		$yc = calculate( $pol, $c );
		
		if( getSign( $yc ) === getSign( calculate( $pol, $a ) ) ){
			$a = $c;
		}else{
			$b = $c;
		}
		
		$loop--;
		
	}while( ( ( $yc >= $precision ) || ( $yc <= (0 - $precision) ) ) && $loop > 0 );
	
	return $c;
}

/**
 * Calculate
 * Calculate the Y of the $pol polynomial function in $x
 * @param array $pol The array that represent the polynomial function, in the form array( 'grade' => 'coefficient' );
 * @param float $x The X
 * @return float The Y
 */
function calculate( array $pol, $x ){
	$res = 0;
	foreach( $pol as $exp => $coeff ){
		$res = $res + ( $coeff * pow( $x, $exp ) );
	}
	return $res;
}

/**
 * GetSign
 * Get the sign of the y
 * @param float $y The Y
 * @return string '+' or '-';
 */
function getSign( $y ){
	return ( $y >= 0 ) ? '+' : '-';
}

/**
 * isValid
 * Check if the given limits are valid
 * @param array $pol The array that represent the polynomial function, in the form array( 'grade' => 'coefficient' );
 * @param int $a Inferior limit
 * @param int $b Superior limit
 * @return bool false on invalid limits
 */
function isValid( $pol, $a, $b ){
	if( $a >= $b ){
		return false;
	}
	
	if( getSign( calculate( $pol, $a ) ) == getSign( calculate( $pol, $b ) ) ){
		return false;
	}

	return true;
}