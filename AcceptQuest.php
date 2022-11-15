<html>
<head>
</head>
<body>
<?php
session_start();
Require_Once "DBHandler.php";
print $_SESSION['QuestID'];
	$sql = "UPDATE questdb SET QuestHeroID=$_SESSION[UserID], QuestStatus='Claimed' WHERE QuestID = $_SESSION[QuestID];";
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: ViewShop.php");
?>
</body>