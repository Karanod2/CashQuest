<html>
<body>
<?php
if (isset($_POST["SignUpButton"])){
	$Username=$_POST["Username"];
	$Email=$_POST["UserEmail"];
	$FName=$_POST["FirstName"];
	$LName=$_POST["LastName"];
	$Password=$_POST["Password"];
	$RptPassword=$_POST["RptPass"];
	
	Require_once 'DBHandler.php';
	Require_once 'functions.php';
	
	if (emptyInputSignup($Username, $Email, $FName, $LName, $Password, $RptPassword) !==false){
		header ("location: SignUpPage.php?error=emptyinput");
		exit();
	}
	if (invalidUsername($Username) !==false){
		header ("location: SignUpPage.php?error=InvalidUsername");
		exit();
	}if (InvalidEmail($Email) !==false){
		header ("location: SignUpPage.php?error=InvalidEmail");
		exit();
	}
	if (PwdMatch($Password, $RptPassword) !==false){
		header ("location: SignUpPage.php?error=PasswordMismatch");
		exit();
	}if (UsernameExists($conn, $Username, $Email) !==false){
		header ("location: SignUpPage.php?error=UsernameTaken");
		exit();
	}
	CreateUser($conn, $Username, $Password, $Email, $FName, $LName);
	
}
else {
	header ("location: SignUpPage.php");
	exit();
}
?>
</body>
</html>