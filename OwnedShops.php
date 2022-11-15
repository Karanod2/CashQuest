<?php
$UserID = $_SESSION['UserID'];
include 'DBHandler.php';
$ShopName = "Fake";
$ShopDesc = "Placeholder";
$ShopAddress = "Nowhere";
//function StoreShopID ($_SESSION['ShopID'], $row["ShopID"]){
//	$_SESSION["ShopID"] = $row["ShopID"]
//}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script defer src="AddLocationScript.js"></script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<style>#map {
	height: 500px;
	width: 500px;
	margin: 0;
	padding: 0;
}
</style>
</head>
<body>
<div class = "OwnedShops">
	
	<?php
	$sql = "SELECT ShopName, ShopAddress, ShopDesc, ShopID from shopdb where OwnerID = $_SESSION[UserID];"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		$goto = "ShopEdit.php?ShopID=";
		$goto .= $row['ShopID'];
		echo "<a href=$goto>";
		echo "<div class= 'ShopPanel'>";
		echo "Shop Name: " . $row["ShopName"]. " Address: " . $row["ShopAddress"]. " Shop Desc: " . $row["ShopDesc"]. "<br>";
		echo "</div>";
		echo "</a>";
		}
	} else {
		echo "0 results";
	}
	?>
	
	<div class = "ShopPanel">
		<form  action="ShopSignUpProcess.php" method="post">
			<label for="ShopName">Shop Name</label>
			<input type="text" id="ShopName" name="ShopName" placeholder="What's Your Shop's Name?">
			<Label for="ShopDesc">Desc.</label>
			<input type="text" id="ShopDesc" name="ShopDesc" placeholder="Describe Your Shop">
			<Label for="ShopType">Type</label>
			<select name="ShopType" id="ShopType">
				<option value=1>Restauraunt (open to public)</option>
				<option value=2>Private Kitchen (delivery/pickup only)</option>
				<option value=3>Grocery Store</option>
				<option value=4>Convenince Store</option>					  
				<option value=5>Clothing Store</option>
				<option value=6>Mechanic Shop</option>
				<option value=7>Construction Crew</option>
				<option value=8>Work Crew</option>
				<option value=9>Factory</option>
			</select>
			<!--<label for="ShopAddress">Shop Address?</label>
			<input type="text" id="ShopAddress" name="ShopAddress" placeholder="Shop Address">-->
			<Button data-modal-target="#modal" id=ShopAddress Type="button" <!--onclick="SelectShopLocation()"-->Locate Shop</button>
			<input type="checkbox" id="hasLocation" name="HasLocation" value="Location" checked>
			<label for="HasPhysicalLocation">Has a public location</label>
			<!-- I want to replace this with a "select on a map" method, but that will have to come later.-->
			<input type="checkbox" id="MobileShop" name="MobileShop" value="MobileShop">
			<label for="MobileShop"> This shop is mobile</label>
			<button type="submit" name="ShopSignUpButton" value="ShopSignUpButton">Create Shop</button>
		</form>
	</div>
	<!--<button data-modal-target='#modal'>Open Modal</button>-->
	<div class="modal" id="modal">
	<div class="modal-header">
		<div class="title">Example Text</div>
		<button data-close-button class="close-button">&times;</button>
	</div>
	<div class="modal-body">
		<iframe>
		<div id="map"></div>
		<script>
		function initMap(){
			var location = {lat: -25.363, lng: 131.044};
			var map = new google.maps.Map(document.getElementById("map"), {zoom: 4, center: location});
		}
		</script>
		<script>async defer src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51422.69223374962!2d-92.41750395642191!3d36.338530732203935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d1d95b08f5fca5%3A0x86906e2c61e4fc25!2sMountain%20Home%2C%20AR%2C%20USA!5e0!3m2!1sen!2sua!4v1663741489449!5m2!1sen!2sua" <!--"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYcI0OkKJ2NjpJ9FiFMZ5AmpVTgRhW9Xo&callback=initMap"--></script>
		</iframe>
		<!--<iframe src="https://www.google.com/maps/embed/v1/view?center=36.3035054,-92.3846655&zoom=4&key=AIzaSyDYcI0OkKJ2NjpJ9FiFMZ5AmpVTgRhW9Xo"></iframe>-->
<!--		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51422.69223374962!2d-92.41750395642191!3d36.338530732203935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d1d95b08f5fca5%3A0x86906e2c61e4fc25!2sMountain%20Home%2C%20AR%2C%20USA!5e0!3m2!1sen!2sua!4v1663741489449!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
-->	</div>
	
	</div>
	<div id="overlay"></div>
	

<p>First we'll list all the stores you own. I assume most of them will be either Home Kitchens or Mechanics. Contractors, lots of contractors. And all those guys who work day labor.</p>
</div>
</body>

</html>