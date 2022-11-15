
<?php
	Session_start();
		if (isset($_SESSION["UserID"])){
			include 'Sidebar.php';
			include 'OwnedShops.php';
			include 'NextWork.php';
			include 'EmployedShops.php';
			
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
?>