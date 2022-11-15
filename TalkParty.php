<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "We call this group 'Party' but what we really mean is friends. We might need to make it so that users can add more groups.";
	?>
