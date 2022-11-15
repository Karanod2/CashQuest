<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="MainPage.css">
</style>
</head>

<body>
	<div class="TopBanner">
		<H1>CashQuest</H1> 
		</div>
		<!--Can somebody get rid of this Gap? It's like a double line break -->
		
	<Nav>
		<ul>
			<li><div class="NavButton">	<a href="index.php">Home</a></div></li>
			<li><div class="NavButton">	<a href="SignUpPage.php">Sign-Up/Log-In</a></div></li>
			<li><div class="NavButton">	<a href="about.php">About</a></div></li>
			<?php
			if (isset($_SESSION["UserID"])){
			echo "<li><a href='ProfilePage.php'>Profile Page</a></li>";
			echo "<li><a href='logout.php'>Logout</a></li>";
			}
			else {
			
			}
			?>
		</ul>
	</nav>