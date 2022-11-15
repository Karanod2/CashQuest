<?php
	include 'Header.php';
	?>
	<br>
	<section class="signup-form">
		<div Class="SignUpBox">
			<form  action="SignUpProcess.php" method="post">
				<label for="Username"><br>Create Username:</br></label>
				<input type="text" id="Username" name="Username" placeholder="Username....">
				
				<label for="E-Mail"><br>Please Enter Recovery E-Mail:</br></label>
				<input type="text" id="UserEmail" name="UserEmail" placeholder="Email....">
				
				<label for="FirstName"><br>Please Enter Your Public First Name:</br></label>
				<input type="text" id="FirstName" name="FirstName" placeholder="First Name....">
				
				<label for="LastName"><br>Please Enter Your Public Last Name:</br></label>
				<input type="text" id="LastName" name="LastName" Placeholder="Last Name....">
				
				<label for="Password"><br>Please Enter Password:</br></label>
				<input type="password" id="Password" name="Password" placeholder="Password....">
				
				<label for="RptPass"><br>Please Retype Your Password:</br></label>
				<input type="password" id="RptPass" name="RptPass" Placeholder="Retype Password....">
				<br>
				<br>
				<button type="submit" name="SignUpButton" value="SignUpButton">Begin Your Adventure!!!</button>
			</form>
			<!-- I can't get this next section to work. It started with <p> tags on the echos, but I took them off because they forced it to echo the entire thing. Tis super frustrating, but not a mandatory feature I suppose. -->
			<?php
				if (isset($_GET["error"])){
					if ($_GET["error"] == "emptyinput") {
						echo "Fill in all fields!";
					}
					else if ($_GET["error"] == "invalidUsername"){
						echo "Choose a proper UserName";
					}
					else if ($_GET["error"] == "InvalidEmail"){
						echo "Choose a proper Email";
					}
					else if ($_GET["error"] == "PasswordMismatch"){
						echo "Your Passwords don't Match!!!";
					}
					else if ($_GET["error"] == "UsernameTaken"){
						echo "Username Taken";
					}
					else if ($_GET["error"] == "none"){
						echo "Signup Success!!";
					}
				};
			?>
		</div>
			
	</section>
	
	<form  action="loginprocess.php" method="post" target="_blank">
			<div Class="LoginBox" style="float: right;">
				<label for="Username"><br>Please Enter Email or UserName:</br></label>
				<input type="text" id="Username" name="Username"><br><br>
				<label for="Password"><br>Please Enter Password:</br></label>
				<input type="password" id="Password" name="Password"><br><br>
				<button type="submit" name="LoginButton" value="loginpressed">Submit</button>
			</div>
		</form>
		

</div>
</body>
</html>



	