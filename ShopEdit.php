<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			include "ShopMenu.php";
			include "ShopFinancialPanel.php";
			include "ShopRoster.php";
			include "ShopSupplyTracker.php";

			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
// I need to add script that checks the Owner ID associated with the ShopID and kicks any user who isn't the owner pack to the Profile page.
?>