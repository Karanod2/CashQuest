<html>
<head>
<link rel="stylesheet" type="text/css" href="MainPage.css">
</head>
<?php
	include 'Header.php';
	?>
	<br>
	<br>
	<div class="container">
		<H2>Welcome Weary Traveler. Stay Awhile, And Login.</h2>
		<form  action="LoginProcess.php" method="post">
			<div Class="LoginBox">
				<label for="Username"><br>Please Enter Email or UserName:</br></label>
				<input type="text" id="Username" name="Username"><br><br>
				<label for="Password"><br>Please Enter Password:</br></label>
				<input type="password" id="Password" name="Password"><br><br>
				<button type="submit" name="LoginButton" value="loginpressed">Submit</button>
			</div>
		</form>
	</div>
	<div class="TopNews">
		<h2>This is the most important Article</h2>
		<p>This section is where I'll put the most important info for new customers (and old) to know. That means new features, bug fixes, all that shit. Or if we get featured in a newspaper or something. Now I need some Junk Text.</p>
		<p>Lorem ipsum dolor So I can make changes here, and they reflect. But I changes to the .css sheet don't count? Turns out I just needed to hold Shift while I clicked to load the page fresh. sit amet, consectetur adipiscing elit. Quisque quis ornare elit. Nunc dolor lectus, vestibulum vel velit in, mattis tristique massa. Etiam consequat posuere nibh, non varius urna. Aenean tempus dictum diam ullamcorper convallis. Ut sit amet dictum lectus. Sed nec malesuada massa. Mauris in elit non sem fringilla fringilla vel ut neque. Duis sit amet malesuada dui.	Vestibulum nec tellus sed erat vestibulum pellentesque sit amet ut nisl. Nulla facilisi. Proin lectus arcu, interdum id porta luctus, sodales vitae sem. Morbi feugiat nisi in fermentum condimentum. Curabitur nec sodales augue. Nullam ornare venenatis dui id commodo.</p>
	</div>
</body>

</html>