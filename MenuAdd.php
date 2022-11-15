<?php
session_start ();
If (isset($_POST['MenuAddButton'])){
$ItemName = $_POST['ItemName'];
$ItemDesc = $_POST['ItemDesc'];
$ItemPrice = $_POST['ItemPrice'];
$AllergyInfo = $_POST['AllergyInfo'];
$ShopID = $_GET['ShopID'];

Require_once 'DBHandler.php';
Require_once 'functions.php';

//ERROR CHECKING GOES HERE

	MenuAdd ($conn, $ShopID, $ItemName, $ItemDesc, $ItemPrice, $AllergyInfo, $ShopID);


}
else {header ("location: ProfilePage.php");}