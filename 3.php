<?php

function bagi($a, $b){
	$count = 0;

	while ( $a >= $b) {
		$a = $a - $b;
		$count++;
	}

	return $count;
}

echo bagi(3,2);