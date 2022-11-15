<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "This one is for family members. You may not like them much, but when you want to ask about holiday plans this is the place to do it. Plus some people have a looser idea of what a family is.";