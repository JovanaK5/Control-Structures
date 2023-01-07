<?php

	//sample2

	$input1 = "user text";
	$input2 = 55;

	//condition1

	if (!is_null($input1)) {
		echo '$input1 is not empty';
	}else{
		echo '$input1 is empty';
	}

	//condition2

	if (isset($input1) && !is_null($input1)) {
		echo '$input1 is not empty';
	}else{
		echo '$input1 is empty';
	}

	//condition3

	if ($input != "") {
		echo '$input1 is not empty';
	}else{
		echo '$input1 is empty';
	}

	//check if the field is empty

	//condition2

	if (!empty($input1)) {
		echo '$input1 is not empty';
	}else{
		echo '$input1 is empty';
	}

	//condition3

	if ($input2 >= 55) {
		echo '$input2 is equal or greater to 55';
	}else{
		echo '$input2 is less than 55';
	}
