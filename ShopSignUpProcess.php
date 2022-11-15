<html>
<body>
<?php
session_start ();

if (isset($_POST["ShopSignUpButton"])){
	$ShopName =$_POST["ShopName"];
	$ShopDesc =$_POST["ShopDesc"];
	$ShopType =$_POST["ShopType"];
	$ShopAddress =$_POST["ShopAddress"];
	$HasPhysicalLocation =$_POST["HasPhysicalLocation"];
	$IsMobile =$_POST["MobileShop"];
	$OwnerID = $_SESSION['UserID'];
	
	Require_once 'DBHandler.php';
	Require_once 'functions.php';
	
	if (ShopEmptyInputSignup($ShopName, $ShopType, $ShopAddress) !==false){
		header ("location: ViewShop.php?error=EmptyInput");
		exit();
	}
	if (InvalidShopName($ShopName) !==false){
		header ("location: ViewShop.php?error=BadName");
		exit();
	}
	if (InvalidShopAddress ($ShopAddress) !==false){
		header ("location: ViewShop.php?error=BadAddress");
		exit();
	}
	//if (ShopNameExists($conn, $ShopName) !==false){
	//	header ("location: ViewShop.php?error=ShopNameTaken");
	//	exit();
	//}
	CreateShop($conn, $OwnerID, $ShopName, $ShopDesc, $ShopType, $ShopAddress, $HasPhysicalLocation, $IsMobile);
	
}
else {
	header ("location: ViewShop.php");
	exit();
}
?>
</body>
</html>