<?php
include "DBHandler.php";
//echo $_SESSION['ShopID'];
//echo $row['ShopID'];
//This bit adds the ShopID to the GET data for the Add Item form.
$ShopID = $_GET['ShopID'];
$MenuAdd = "MenuAdd.php?ShopID=".$ShopID;
//echo $ShopID
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="MenuPanel">

<!--<div class = "OwnedShops">-->
	
	<?php
	$sql = "SELECT MenuTitle, MenuDesc, MenuPrice, MenuAllergyInfo from menudb where MenuShopID = $ShopID;"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		echo "<div class= 'ShopPanel'>";
		echo "Item Name: " . $row["MenuTitle"]. " Desc: " . $row["MenuDesc"]. " Price: " . $row["MenuPrice"]. " Allergy Info: " . $row["MenuAllergyInfo"]. "<br>";
		echo "</div>";
		}
	} else {
		echo "0 results";
	}
	?>
	
	<div class = "ShopPanel">
		<form  action=<?php echo $MenuAdd ?> method="post">
			<label for="ItemName">Item Name</label>
			<input type="text" id="ItemName" name="ItemName" placeholder="Wh'tcha Sellin'?">
			<Label for="ItemDesc">Description?</label>
			<input type="text" id="ItemDesc" name="ItemDesc" placeholder="What's It Smell Like?">
			<label for="ItemPrice">Price?</label>
			<input type="text" id="ItemPrice" name="ItemPrice" placeholder="How Much're Ya Chargin'?">	
			
			
			<label for="AllergyInfo">Allergy Concerns?</label>
			<input type="text" id="AllergyInfo" name="AllergyInfo" placeholder="Lactose, Nuts, Shellfish, etc.?">
			<button type="submit" name="MenuAddButton" value="MenuAddButton">Add Item</button>
		</form>
	</div>		</div>
</body>
</html>