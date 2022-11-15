<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "It's a settings page. I can't even get the profile pic to upload yet, much less set up a bunch of other bullshit.";
		echo "<br>";
		echo $_SESSION["UserID"];
		echo "<br>";
		echo $_SESSION["Username"];
		echo "<br>";
		echo $_SESSION["WalletValue"];
		echo "<br>";
		echo $_SESSION["InEscrow"];
		echo "<br>";
		echo $_SESSION["ProfilePic"];