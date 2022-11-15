
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="QuestList">
<?php

	Require_once 'DBHandler.php';
	
	$sql = "SELECT QuestReward, QuestTitle, QuestDescription, QuestID, QuestAutoAccept from Questdb where QuestCreatorID != $_SESSION[UserID] and QuestStatus = 'Available';"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		$goto = "QuestDetails.php?QuestID=";
		$goto .= $row['QuestID'];
		echo "<a href=$goto>";
		echo "<div class= 'QuestPanel'>";
		echo "Quest: " . $row["QuestTitle"]. " Reward: " . $row["QuestReward"]. " Quest Desc: " . $row["QuestDescription"]. "<button id=QuestAcceptBtn  action=QuestAccept.php Type=submit>Claim Quest</button>". "<br>";
		echo "</div>";
		echo "</a>";
		}
	} else {
		echo "0 results";
	}
	?>
<!--<p>This section is basically one giant GET request. It's just a list version of all the same data as in the Quest Map. In fact, one might pull data for both, but I don't know which will do the pulling. This format may also have a few extra details immediatly visible</p>
<p>Also, now that I look at it I think I want this panel to take up less space. Maybe 40% instead? it just looks kinda huge.</p>-->
</div>
</body>
</html>