<?php
$arr = [ 7, 3, 9, 4, 6, 9, 17, 3 ]; //expected 3,4,6,9,17

$count = count( $arr );

$result = [];

function iterate( array $arr, $i, $j, $count, $arr2 = [] ) {

	$res[] = $arr[ $i ];

	for ( $k = $j; $k < $count; $k ++ ) {
		if ( end( $res ) < $arr[ $k ] ) {
			$res[] = $arr[ $k ];
		}
	}

	if ( count( $arr2 ) > count( $res ) ) {
		$res = $arr2;
	}
	if ( $j < $count ) {
		return iterate( $arr, $i, $j + 1, $count, $res );
	}

	return $res;
}

$i = 0;
do {
	$result = iterate( $arr, $i, $i + 1, $count, $result );
	$i ++;
} while ( $i < $count );

var_dump( $result );
