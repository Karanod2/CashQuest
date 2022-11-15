<?php
//echo "This goes on the right hand margin and lists your upcoming proffesional obligations. Appointments, assigned shifts, deadlines, etc...";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class = "NextWork">
<p>This goes on the right hand margin and lists your upcoming proffesional obligations. Appointments, assigned shifts, deadlines, etc...</p>

<?php

	Require_once 'DBHandler.php';
	
	$sql = "SELECT QuestReward, QuestTitle, QuestDescription, QuestID, QuestAutoAccept from Questdb where QuestHeroID = $_SESSION[UserID] and QuestStatus != 'Finished';"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		$goto = "HeroReviewQuest.php?QuestID=";
		$goto .= $row['QuestID'];
		echo "<a href=$goto>";
		echo "<div class= 'QuestPanel'>";
		echo "Quest: " . $row["QuestTitle"]. " Reward: " . $row["QuestReward"]. " Quest Desc: " . $row["QuestDescription"]. "<button id=QuestFinishBtn  action=QuestFinish.php Type=submit>Finish Quest</button>". "<br>";
		echo "</div>";
		echo "</a>";
		}
	} else {
		echo "0 results";
	}
	?>

</div>
</body>
</html>
</div>
</body>
</html>