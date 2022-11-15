<?php
	
?>
<html>
<head>
</head>
<body>
<div class = "PostedQuests">
<?php

	Require_once 'DBHandler.php';
	
	$sql = "SELECT QuestReward, QuestTitle, QuestDescription, QuestID from Questdb where QuestCreatorID = $_SESSION[UserID];"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		$goto = "QuestEdit.php?QuestID=";
		$goto .= $row['QuestID'];
		echo "<a href=$goto>";
		echo "<div class= 'QuestPanel'>";
		echo "Quest: " . $row["QuestTitle"]. " Reward: " . $row["QuestReward"]. " Quest Desc: " . $row["QuestDescription"]. "<br>";
		echo "</div>";
		echo "</a>";
		}
	} else {
		echo "0 results";
	}
	?>

<!--<p>This is where we'll put the quests the user has made themselves. This should mostly be food delivery requests and people who own small bussnissess. If a Shop has an opening on the roster the program may recomend offering the opening as a quest. In this cas the main goal is to show up for the shift.</p>-->
</div>
</body>
</html>