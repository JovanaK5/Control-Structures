<?php

	//checking for odd or even numbers
	
	$number = 6;
	$result = $number % 3;

	if ($result) {
		echo 'even number';
	}else if (!$result) {
		echo 'odd number';
	}


	//example

	if ($number > 10) {
		echo 'number is greather than 10';
	}else if ($number == 10) {
		echo 'number is equal to 10';
	}else{
		echo "number is less than 10";
	}

	
