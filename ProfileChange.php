<?php
//session_start();

//echo "This Is where I put the option to change details about the players profile. Almost anything that is stored in the PlayerDB can be changed here.";
?>
<html>
<head>

</head>
<body>
	<div class = "ProfileChange">
	<button type="button">Change Profile Picture</button>
	<button type="button">Add Equipment</button>

	<form  action="ProfileChangeProcess.php" method="post">
				<label for="VehicleType"><br>Your new Username?</br></label>
				<input type="text" id="NewUsername" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>New First Name?</br></label>
				<input type="text" id="NewFName" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>New Last Name?</br></label>
				<input type="text" id="NewLName" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>New Home Address?</br></label>
				<input type="text" id="NewHomeAddress" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>Change Faction</br></label>
				<input type="text" id="VehicleType" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>Change E-mail?</br></label>
				<input type="text" id="VehicleType" name="VehicleType" placeholder="New Username">
				<label for="VehicleType"><br>Change your Bio</br></label>
				<input type="text" id="VehicleType" name="VehicleType" placeholder="New Username">
				
				<br>
				<br>
				<button type="submit" name="HeroSignUpButton" value="SignUpButton">Update Profile</button>
			</form>
	<p>I wish this box where on the right hand side, but putting it there made the .css a living Nightmare.</p>
	</div>
</body>
</html>