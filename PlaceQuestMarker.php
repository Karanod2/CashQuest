<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "This page is mostly to add shops that you don't own. Say McDonalds doesn't want to join because of an exclusivity deal they have with Doordash. Users just upload the location as a Quest marker and post their prices. We will likely need to require Hero's to submit a picture of the receipt in order to validate that step of the order. We also need to be able to issue out credit cards.";
	