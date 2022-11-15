<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
	echo "I wanted to include a way to crowdsource the resolution of user disputes. Say some guy drops food of, takes the picture, then takes the food. First, the questmaker is going to file a complaint, then the accused theif gets a popup to plead his case. after both submit their evidence it is sent here. where both sides are shown, no unnecisary user data is submited, and once one side achieves 85% of the votes the issue is resolved in their favor. minimum 10 votes";