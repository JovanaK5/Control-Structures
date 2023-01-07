<?php

	//odd numbers form 0 to 10
	
	//example 1

	for ($value=1; $value <= 10 ; $value++) { 
			
		$result = $value % 2;

		if ($result > 0) {
			
			echo "odd number $value" . "<br>";
		}
	}

	//example 2

	$value=1;
	for (; $value <= 10 ; $value++) { 
			
		$result = $value % 2;

		if ($result > 0) {
			
			echo "odd number $value" . "<br>";
		}
	}


	//example 3

	$value=0;
	for (; $value <= 10 ; ++$value) { 
			
		$result = $value % 2;

		if ($result > 0) {
			
			echo "odd number $value" . "<br>";
		}
	}


	//example 4

	$value=1;
	for (; $value <= 10 ; ) { 
			
		$result = $value % 2;

		if ($result > 0) {
			
			echo "odd number $value" . "<br>";
		}
		$value++;
	}


	