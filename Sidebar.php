<?php
	//echo $_SESSION['Username'];
	//echo $_SESSION["ProfilePicAddress"];
	//$ProfilePicAddress = $_SESSION["ProfilePicAddress"];
	//$UserID = $_SESSION["UserID"];
	//$ProfilePicAddress = $_SESSION["ProfilePicAddress"];
	//echo $ProfilePicAddress;
	//echo $UserID;
	//$id = $_SESSION['UserID'];
	$PlayerPlatinum = floor($_SESSION['WalletValue']/1000);
	//echo ($PlayerPlatinum), " Platinum";
	$PlayerGold = floor(($_SESSION['WalletValue']-($PlayerPlatinum*1000))/10);
	//Echo $PlayerGold, " Gold";
	$PlayerSilver = floor((($_SESSION['WalletValue']-($PlayerPlatinum*1000))-($PlayerGold*10)));
	//Echo $PlayerSilver, "Silver";
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
		<nav>
			<img src = "<?php echo $_SESSION["ProfilePic"]?>">

		<ul>
			<li><div class="NavBar"><a href="ProfilePage.php"><?php echo " " . $_SESSION["Username"] . "<br>" ?></a></div></li>
			<li> <div class="NavBar"><a href="FinancialPage.php"><?php echo $PlayerPlatinum, " Plat. ", $PlayerGold, " Gold ", $PlayerSilver, " Silver " ?></a></div></li>
			<hr>
			<li><div class="NavBar"><a href="LocalNews.php">Local News</a></div></li>
			<li><div class="NavBar"><a href="TalkParty.php">Talk to your party</a></div></li>
			<li><div class="NavBar"><a href="TalkGuild.php">Talk to your Guildmates</a></div></li>
			<li><div class="NavBar"><a href="TalkFamily.php">Talk to your Family</a></div></li>
			<hr>
			<li><div class="NavBar"><a href="CreateQuest.php">Create a Quest!</a></div></li>
			<li><div class="NavBar"><a href="ClaimQuest.php">Claim a Quest!</a></div></li>
			<li><div class="NavBar"><a href="ViewShop.php">View your Shops!</a></div></li>
			<li><div class="NavBar"><a href="NearbyShop.php">Hire Local Heros!</a></div></li>
			<li><div class="NavBar"><a href="PlaceQuestMarker.php">Place a QuestMarker</a></div></li>
			<hr>
			<li><div class="NavBar"><a href="ReviewComplaints.php">Pass Judgement</a></div></li>
			<li><div class="NavBar"><a href="Settings.php">Settings</a></div></li>
			<li><div class="NavBar"><a href="LogOut.php">Logout</a></div></li>
		</ul>
		
	</nav>