<?php

	$value = 0;
	if ($value <= 0) {
		goto error_block;
	}

	error_block:
		echo "This is error block" . "<br>";

	for ($count=0; $count <= 10; $count++) { 
		if ($count == 2) {
			goto loop1;
		}
	}

	exit();
	loop1:
		echo "Counter value is $value" . "<br>";
//goto labels should be outside the loop