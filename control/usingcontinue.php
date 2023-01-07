<?php

	//printing even numbers using while infinite loop and break after 10 numbers

	$value = 1;

	while (true) {
		
		$result = $value % 2;

		if ($result == 1) {
			$value++;
			continue;
		}

		if ($value > 10) {
			break;
		}

		echo "even numbers : $value". "<br>";
		$value++;
	}