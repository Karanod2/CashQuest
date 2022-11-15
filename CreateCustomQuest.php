<html>
<body>
<?php
	session_start();
if (isset($_POST["CreateCustomQuestBtn"])){
	$QuestTitle= $_POST["QuestTitle"];
	$QuestInst= $_POST["QuestInst"];
	$QuestLoc1= $_POST["QuestLoc1"];
	$QuestLoc2= $_POST["QuestLoc2"];
	$QuestLoc3= $_POST["QuestLoc3"];
	$QuestRew= $_POST["QuestRew"];
	$AcceptFirst= $_POST["AcceptFirst"];
	$QuestCreatorID= $_SESSION["UserID"];
	$QuestStatus= "Available";
	
	Require_once 'DBHandler.php';
	Require_once 'Functions.php';
	
	//Error Checking Goes Here!!!! Title, Instructions, Loc 1  and Reward must be filled. Add other potential errors as you think of them//
	//This part checks that the QuestCreator has enough cash to offer the quest.
	
	if (($_SESSION['WalletValue']-($QuestRew*1.01)<0)==true){
		header ("location: CreateQuest.php?InsufficientFunds");
		exit();
	}
	

	//This bit inserts the new quest into the database.
	$sql = "INSERT INTO questdb (QuestCreatorID, QuestReward, QuestTitle, QuestDescription, QuestAutoAccept, QuestWorkLoc, QuestPickupLoc, QuestDropoffLoc, QuestStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: CreateQuest.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "sssssssss", $QuestCreatorID, $QuestRew, $QuestTitle, $QuestInst, $AcceptFirst, $QuestLoc1, $QuestLoc2, $QuestLoc3, $QuestStatus);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	//Next I need to reduce the Questgivers WalletTotal by the appropriate amount.
	$_SESSION['WalletValue'] = ($_SESSION['WalletValue']-($QuestRew*1.01));
	
	//Now I need to update the SESSION variable $_SESSION['WalletValue']
	$sql = "UPDATE playerDB SET WalletTotal=$_SESSION[WalletValue] WHERE UserID = $_SESSION[UserID];";
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: http://localhost:8080/CreateQuest.php?error=none");
	exit();
}


?>
</body>
</html>