<?php

if (isset($_POST["LoginButton"])){
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];
	
	require_once 'DBHandler.php';
	require_once 'functions.php';
	
	if (emptyInputLogin($Username, $Password !==false)){
		header ("location: SignUpPage.php?error=emptyinputlogin");
		exit();
	}
	
	loginUser($conn, $Username, $Password);
	header("location: ProfilePage.php");
	}
else {
	header("location: SignUpPage.php?error=gobldygook");
	exit();	
}