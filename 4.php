<?php

for ($i=1; $i <= 50 ; $i++) { 
		echo $i;
	if( $i % 5 == 0 && $i % 3 == 0 ){
		echo " foobar";

	}elseif( $i % 5 == 0 ){
		echo " bar";

	}elseif( $i % 3 == 0 ){
		echo " foo";
	}
	echo "<br>";
}