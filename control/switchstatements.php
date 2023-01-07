<?php

	//checking for odd or even numbers
	
	$number = 6;
	$result = $number % 3;

	if ($result) {
		echo 'even number';
	}else if (!$result) {
		echo 'odd number';
	}


	//example1 with switch

	switch ($result) {
		case 1:
			echo 'odd number';
			break;

		case 0:
		    echo 'even number';
		    break;
		
		default:
			echo 'invalid number';
			break;
	}


	if ($number > 10) {
		echo 'number is greather than 10';
	}else if ($number == 10) {
		echo 'number is equal to 10';
	}else{
		echo "number is less than 10";
	}

	//example2 with switch

	switch (true) {
		case $number > 10:
			echo 'number is greather than 10';
			break;
		
		case $number == 10:
		    echo 'number is equal to 10';
			break;

		default:
		    echo 'number is less than 10';
			break;

	}

	//string example

	$day = "Sat";
	switch($day){
		case "Sun":
		echo "it it Sunday";
		break;

		case "Sat":
		echo "it is Saturday";
		break;

		default:
		echo "some other day";
	}