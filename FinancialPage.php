<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			include "AddFunds.php";
			include "CurrentFunds.php";
			include "AddNewPaymentMethod.php";
			include "TransferFundstoAlly.php";
			
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}
?>