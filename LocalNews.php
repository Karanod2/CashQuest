<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "This page will be news posts from the local area. Anything a business publicly posts here, etc. When a busines has an opening they can post about it here.";