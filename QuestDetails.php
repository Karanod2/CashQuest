<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>

<?php
	session_start();
		Require_Once "DBHandler.php";
		Require_Once "Functions.php";
		include "Sidebar.php";
		echo '<link rel="stylesheet" type="text/css" href="style.css">';
		//I don't think this function works. Nothing calls it at any rate.
function AcceptQuest($conn){
			
		$sql = 'UPDATE questdb SET `QuestHeroID`=$_SESSION["UserID"], `QuestStatus`="Claimed" WHERE $_GET[QuestID];';
	
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_execute($sql);
	mysqli_stmt_close($sql);
	}
		if (isset($_SESSION["UserID"])){
			
			
			$sql = "SELECT QuestReward, QuestTitle, QuestDescription, QuestAutoAccept, QuestWorkLoc, QuestPickupLoc, QuestDropoffLoc, QuestInv, QuestRequiredEquip, QuestReqExp, QuestReqEdu from Questdb where QuestID = $_GET[QuestID];"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		//$goto = "QuestEdit.php?QuestID=";
		//$goto .= $row['QuestID'];
		//echo "<a href=$goto>";
		echo "<div class= 'QuestPanel'>";
		echo "Quest: " . $row["QuestTitle"];
		echo "<br> <br>";
		echo " Reward: " . $row["QuestReward"];
		echo "<br> <br>";
		echo " Quest Description: " . $row["QuestDescription"];
		echo "<br> <br>";
		echo " Auto Accept?: " . $row["QuestAutoAccept"];
		echo "<br> <br>";
		echo " Where is the work done?: " . $row["QuestWorkLoc"];
		echo "<br> <br>";
		echo " Where does the job start at?: " . $row["QuestPickupLoc"];
		echo "<br> <br>";
		echo " Where does the job end at?: " . $row["QuestDropoffLoc"];
		echo "<br> <br>";
		echo " What all does the worker need to bring?: " . $row["QuestInv"];
		echo "<br> <br>";
		echo " What equipment is the worker expected to own?: " . $row["QuestRequiredEquip"];
		echo "<br> <br>";
		echo " What Experiance does the worker need to have?: " . $row["QuestReqExp"];
		echo "<br> <br>";
		echo " What Education does the worker need to have?: " . $row["QuestReqEdu"];
		echo "<br> <br>";
		echo "</div>";
		echo "</a>";
		}
		}
		}
		//storing the QuestID as a session variable for later use//
		$_SESSION['QuestID']=$_GET['QuestID'];
		?>
	<form action="AcceptQuest.php" method= "post">
		<input type="submit" value= "Accept Quest">
		</form>
	
	
	
		
		
		
	
		</body>
		<script>
		
		//function AcceptQuest($conn){
		//	<?php
		//$sql = 'UPDATE questdb SET QuestHeroID=$_SESSION["UserID"], //QuestStatus="Claimed" WHERE $_GET[QuestID];';
	
	//$stmt = mysqli_stmt_init($conn);
	//mysqli_stmt_execute($sql);
	//mysqli_stmt_close($sql);
	
	//?>
	//}
	</script>
	</html>
	