<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>

<?php
//This file shows the Hero the details of a quest they have already accepted and allows them to mark it as finished.
	session_start();
		Require_Once "DBHandler.php";
		Require_Once "Functions.php";
		include "Sidebar.php";
		echo '<link rel="stylesheet" type="text/css" href="style.css">';
		

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
		$_SESSION['QuestRew']=$row['QuestReward'];
		}
		}
		}
		//storing the QuestID as a session variable for later use//
		$_SESSION['QuestID']=$_GET['QuestID'];
		?>
			<form action="SubmitReciept.php" method= "post">
		<label for="SubmitReciept">If you had to buy something to complete the quest, submit an image of the reciept here.</label>
		<input type="file" id="SubmitReciept" name="SubmitReciept"><br>
		<label for="ReciptAmount">Amount Claimed on the Recipt:</label>
		<input type="number" id="RecieptAmount" name="ReciptAmount">
		<input type="submit" value= "Submit Reciept">
		</form>
		<br><br>
		
	<form action="FinishQuest.php" method= "post">
		<label for="QuestFinishProof">Submit Proof of Quest Completion:</label>
		<input type="file" id="QuestFinishProof" name="QuestFinishProof"><br>
		<input type="submit" value= "Finish Quest">
		</form>
		<br><br>

		I also need a chatbox here so that the Hero can comunicate with the quest giver.
	
	
		
		
		
	
		</body>
		<script>
	</script>
	</html>
	