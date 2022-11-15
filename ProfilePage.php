<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			include "ProfileFeed.php";
			include "EditFriends.php";
			include "ProfileChange.php";
			include "EditPhotos.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	//echo $_SESSION['password'];
	//echo $_SESSION["ProfilePicAddress"];
	//$ProfilePicAddress = $_SESSION["ProfilePicAddress"];
	//$UserID = $_SESSION["UserID"];
	//echo $ProfilePicAddress;
	//echo $UserID;