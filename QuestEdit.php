<?php
	session_start();
		Require_Once "DBHandler.php";
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			
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