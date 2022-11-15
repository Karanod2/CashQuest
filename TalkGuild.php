<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "Guildmates are Co-workers. people you added while at jobs, bosses, etc. This panel can also contain new job offers from people who you have previously worked for. Celeberities? Anyone who you added purely out of politness";