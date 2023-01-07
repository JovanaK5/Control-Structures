<?php

	function checkRoles($roles){

		if (empty($roles)) {
			echo "Roles can't be empty" . "<br>";
			return;
		}

		switch ($roles) {
			case "Admin":
				echo "Hi Admin". "<br>";
				break;

			case "Editor":
				echo "Hi Editor". "<br>";
				break;
			
			default:
			    echo "Role is empty". "<br>";
				
		}
	}

	checkRoles("Admin");
	checkRoles("Editor");
	checkRoles(" ");