<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			include "QuestMap.php";
			include "QuestFilter.php";
			include "QuestList.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
?>