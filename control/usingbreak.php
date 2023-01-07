<?php

	//break the infinite loop
	//printing 1 to 10 

	$value = 1;

	do{
		echo $value . "<br>";

		if ($value >= 10) {
			break;
		}

		$value++;
	}
	while (true);


	//breaking multiple loop

	$loop1 = 1;
	$loop2 = 1;
	$loop3 = 1;

	for (; $loop1 <= 10 ; $loop1++) { 
		while ($loop2 <= 10) {
			do{

				if ($loop3 == 5) {
			break;
		}

		echo "Loop3 : $loop3" . "<br>";
				$loop3++;
			}
		while($loop3 <= 10);

		if ($loop2 == 6) {
			break;
		}

		echo "Loop2 : $loop2" . "<br>";

		$loop2++;
		}

		if ($loop1 == 7) {
			break;
		}

		echo "Loop1 : $loop1" . "<br>";
	}