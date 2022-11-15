<html>
<head>
</head>
<body>
<?php
session_start();
Require_Once "DBHandler.php";
print $_SESSION['QuestID'];
	$sql = "UPDATE questdb SET QuestStatus='Finished' WHERE QuestID = $_SESSION[QuestID];";
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	//Here we give the hero his reward from the QuestRew variable.
	$_SESSION['WalletValue'] = $_SESSION['WalletValue']+($_SESSION['QuestRew']*.99);
	$sql = "UPDATE playerdb SET WalletTotal=$_SESSION[WalletValue] WHERE UserID = $_SESSION[UserID];";
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: ClaimQuest.php");
?>
</body>