<?php
 	include "header.php";
?>

<body>

	<?php
		include "menu.php";
	?>

	<h1>How to include files</h1>

<?php

	include "footer.htm";
?>

/*
	require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    include will only produce a warning (E_WARNING) and the script will continue
*/