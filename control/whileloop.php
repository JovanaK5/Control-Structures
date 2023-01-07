<?php

	//even numbers form 0 to 10

	//example 1

	$value = 1;

	while ($value <= 10) {
		echo $value . "<br>";
		$value++;
	}


	//example 2

	$value=1;
	while ( $value <= 10 ) { 
			
		$result = $value % 2;

		if ($result > 0) {
			
			echo "odd number $value" . "<br>";
		}
		$value++;
	}

