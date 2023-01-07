<?php
	
	//sample1

	$condition1 = TRUE;
	if($condition1) {
		echo 'This is if block'. "<br>";
		echo 'This is true condition'. "<br>";
	}else{
		echo 'This is else block'. "<br>";
		echo 'This is false condition'. "<br>";
	}

	//define condition2 and check 

	$condition2 = FALSE;
	if($condition2 && $condition1) {
		echo 'This is if block'. "<br>";
		echo 'This is true condition'. "<br>";
	}else{
		echo 'This is else block'. "<br>";
		echo 'This is false condition'. "<br>";
	}
?>


<!doctype html>
<!DOCTYPE html>
<html>
<head>
	
	<title>if else statements</title>
</head>
<body>

		<?php if($condition1){ ?>

		  <h1>This is true condition</h1>

		<?php } else{ ?>

		  <h1>This is false condition</h1>

		<?php } ?>

</body>
</html>