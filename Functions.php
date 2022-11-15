 <?php
 
function emptyInputSignup($Username, $Password, $Email, $FName, $LName, $RptPassword) {
	 $result;
	 if(empty($Username) || empty($Password) || empty($Email) || empty($FName) || empty($LName) || empty($RptPassword)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }
function ShopEmptyInputSignup($ShopName, $ShopType, $ShopAddress) {
	 $result;
	 if(empty($ShopName) || empty($ShopType) || empty($ShopAddress)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }
function InvalidUsername($Username) {
	 $result;
	 if(!preg_match("/^[a-zA-Z0-9]*$/", $Username)) {
		$result = true;
	}
	else{ 
		$result = false;
	}
	return $result;
 }
function InvalidShopName($ShopName) {
	 $result;
	 if(!preg_match("/^[a-zA-Z0-9]*$/", $ShopName)) {
		$result = true;
	}
	else{ 
		$result = false;
	}
	return $result;
 }
function InvalidShopAddress($ShopAddress) {
	 $result = false;
	/* if(!preg_match("/^[a-zA-Z0-9]*$/", $ShopAddress)) {
		$result = true;
	}
	else{ 
		$result = false;
	}*/
	return $result;
 }
function InvalidEmail($Email) {
	 $result;
	 if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }
function PwdMatch($Password, $RptPassword) {
	 $result;
	 if($Password !== $RptPassword) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
 }
function UsernameExists($conn, $Username, $Email) {
	$sql = "SELECT * FROM playerdb WHERE Username = ? OR Email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: SignUpPage.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ss", $Username, $Email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
 }
function ShopNameExists($conn, $ShopName) {
	$sql = "SELECT * FROM menudb WHERE ShopName = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: ViewShop.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $ShopName);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if ($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
 }
function createUser($conn, $Username, $Password, $Email, $FName, $LName) {
	$sql = "INSERT INTO playerdb (Username, Password, Email, FirstName, LastName) VALUES (?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: SignUpPage.php?error=stmtfailed");
		exit();
	}
	//The version of php this was originally written in predates the password_hash function. Fix this when we migrate to a modern setting
	//$hashedPwd = password_hash($Password, PASSWORD_DEFAULT);
	$hashedPwd = crypt('$Password');
	
	mysqli_stmt_bind_param($stmt, "sssss", $Username, $hashedPwd, $Email, $FName, $LName);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	//header ("location: http://localhost:8080/SignUpPage.html?error=none");
	header ("location: http://localhost:8080/SignUpProfileDetails.php");
	exit();
 }
function CreateShop($conn, $OwnerID, $ShopName, $ShopDesc, $ShopType, $ShopAddress) {
	$sql = "INSERT INTO shopdb (OwnerID, ShopName, ShopDesc, ShopType, ShopAddress) VALUES (?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: ViewShop.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "sssss", $OwnerID, $ShopName, $ShopDesc, $ShopType, $ShopAddress);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: http://localhost:8080/ViewShop.php?error=none");
	exit();
 }
 function MenuAdd ($conn, $ShopID, $ItemName, $ItemDesc, $ItemPrice, $AllergyInfo, $ShopID){
	 $sql = "INSERT INTO menudb (MenuShopID, MenuTitle, MenuDesc, MenuPrice, MenuAllergyInfo) VALUES (?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: ShopEdit.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "sssss", $ShopID, $ItemName, $ItemDesc, $ItemPrice, $AllergyInfo);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	$return= "ShopEdit.php?ShopID=" .$ShopID. "&error=none";
	header ("location: $return");
	exit();
	 
 }
 function emptyInputlogin($Username, $Password){
	 $result;
	 if(empty($Username) || empty($Password)) {
		$result = true;
	}
	else{
		$result = false;
	}
 return $result;
 }
 function loginUser($conn, $Username, $Password){
	 $UsernameExists = UsernameExists($conn, $Username, $Username);
	 
	 if ($UsernameExists == false){
		 header("location: SignUpPage.html?error=UserNotFound");
		 exit();
	 }
	$PasswordHashed = $UsernameExists["Password"];
	//this is gonna get different from the video
	// $checkPassword = password_verify($Password, $PasswordHashed);
	//the code below is meant to chack the unhashed password against the supplied password.
	 If ($PasswordHashed != $Password){
	 $checkPassword = false;
	 }
	 else $checkPassword = true;
	 
	 If ($checkPassword === false){
		 header("location: SignUpPage.html?error=BadPass");
		 exit();
	 }
	 else if ($checkPassword === true) {
		 session_start();
		 $_SESSION["UserID"] = $UsernameExists["UserID"];
		 $_SESSION["Username"] = $UsernameExists["Username"];
		 $_SESSION["WalletValue"] = $UsernameExists["WalletTotal"];
		 $_SESSION["InEscrow"] = $UsernameExists["InEscrow"];
		 $_SESSION["ProfilePic"] = $UsernameExists["ProfilePicAddress"];
		  header("location: ProfilePage.php");
		  exit();
	 }
 }
function CreateCustomQuest ($conn, $QuestCreatorID, $QuestRew, $QuestTitle, $QuestInst, $AcceptFirst, $QuestLoc1, $QuestLoc2, $QuestLoc3){
	$sql = "INSERT INTO questdb (QuestCreatorID, QuestReward, QuestTitle, QuestDescription, QuestAutoAccept, QuestWorkLoc, QuestPickupLoc, QuestDropoffLoc) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header ("location: CreateQuest.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ssssssss", $QuestCreatorID, $QuestRew, $QuestTitle, $QuestInst, $AcceptFirst, $QuestLoc1, $QuestLoc2, $QuestLoc3);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: http://localhost:8080/CreateQuest.php?error=none");
	exit();
 }