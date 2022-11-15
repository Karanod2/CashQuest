<?php
Session_start();
Require_once 'Functions.php';
require_once 'DBHandler.php';
$PlayerFaction=2;
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section class="DetailsSignUp-form">
		<div Class="AllPlayersSignUpBox">
			<form  action="UploadProfilePic.php" method="post" enctype="multipart/form-data">
				<label for="NewProfilePic"><br>Choose your prettiest picture!!!</br></label>
				<input type="file" id="NewProfilePic" name="NewProfilePic">
				<br>
				<button type="submit" name="ProfilePicButton">Show us how pretty you are!!!</button>
			</form>
			
			<img src = "<?php echo $_SESSION["ProfilePic"]?>">
			<form  action="HomeAddress.php" method="post">
				<label for="HomeAddress"><br>Home Address</br></label>
				<input type="text" id="HomeAddress" name="HomeAddress" placeholder="Where do we drop off the food you order?">
				<br>
				
			<label for="PlayerFaction"><br>Which Faction will you join?</br></label>
				<select name="PlayerFaction" id="PlayerFaction">
					  <option value="1">Humans</option>
					  <option value="2">Elves</option>
					  <option value="3">Dwarves</option>
					  <option value="4">Hobbits</option>
					  <option value="5">Orks</option>
				</select>
				<br>
				<button type="submit" name="HeroSignUpButton" value="SignUpButton">Proclaim Your Greatness to All!!!</button>
			</form>
			<?php
			switch ($PlayerFaction){
				case 1:
					echo "Human: The most numerous and diverse race. The come in every shape, size, color, and creed. Serious Version players are assigned Human as the Default.";
				break;
				case 2:
					Echo "Elf: Artistic and Creative, Elves excel at tasks where aesthetics reign supreme. Often performing well as Graphic Designers or Tattoo Artists.";
				break;
				case 3:
					Echo "Dwarf: Strong workers who can chip away at a task until it is complete. You often find them in factories, though their artistic side leads several into the trades.";
				break;
				case 4:
					Echo "Hobbit: Creatures of comfort, they are most often found in offices where their love of comfort and polite society allows them to excel. They make excellent secretaries.";
				break;
				case 5:
					Echo "Orc: Strength and teamwork are the key skills for any Orc. They tend to take a head-on approach to problem solving, trusting to teamwork and determination to win the day.";
				break;
			}?>
		</div>
		<div Class="HeroSignUpBox">
			<form  action="HeroSignUpProcess.php" method="post">
				<label for="VehicleType"><br>What Chariot doth though ride forth upon?</br></label>
				<input type="text" id="VehicleType" name="VehicleType" placeholder="I wish this was a drop down list">
				<label for="EquipHandOwned"><br>What gear do though bring forth?</br></label>
				<select name="EquipHandOwned" id="HandEquip">
					  <option value="Hammer">Hammer</option>
					  <option value="Screwdriver">Screwdriver</option>
					  <option value="Saw">Saw</option>
					  <option value="PowerDrill">Power Drill</option>
					  <option value="Ladder">Ladder</option>
				</select>
				<label for="EquipPowerOwned
				<select name="PowerToolsOwned" id="PowerEquip">
					  <option value="CircleSaw">Circle Saw</option>
					  <option value="SawzAll">SawzAll</option>
					  <option value="NailGun">Nail Gun</option>
					  <option value="AirCompressor">Air compressor</option>
				</select>
				
				<br>
				<br>
				<button type="submit" name="HeroSignUpButton" value="SignUpButton">Become a Hero!!!</button>
			</form>
		</div>
		<div Class="QuestMakerSignUpBox">
			<form  action="QuestMakerSignUpProcess.php" method="post">
				<label for="AddFundOption"><br>How much grease do you bring for our hero's palms?</br></label>
				<input type="text" id="RoutingNumber" name="VehicleType" placeholder="Routing Number">
				<input type="text" id="AccountNumber" name="VehicleType" placeholder="Account Number">
				<input type="text" id="FundingAmmount" name="VehicleType" placeholder="Funding Amount">				
				<br>
				<br>
				<button type="submit" name="QuestMakerSignUpButton" value="SignUpButton">Hire Mighty Heros!!!</button>
			</form>
		</div>
		<div Class="ShopOwnerSignUpBox">
			<form  action="ShopSignUpProcess.php" method="post">
				<label for="ShopSignUp"><br>What goods and services do you bring to the community?</br></label>
					<input type="text" id="ShopName" name="ShopName" placeholder="What's the name of your Shop?">
				<br>
				<input type="text" id="ShopDesc" name="ShopDesc" placeholder="How would you describe your Shop? (500 Char Limit)">
				<br>
				<select name="ShopType" id="ShopType">
					  <option value="Restaurant">Restauraunt (open to public)</option>
					  <option value="PrivateKitchen">Private Kitchen (delivery/pickup only)</option>
					  <option value="GroceryStore">Grocery Store</option>
					  <option value="ConvStore">Convenince Store</option>					  
					  <option value="ClothingStore">Clothing Store</option>
					  <option value="Mechanic">Mechanic Shop</option>
					  <option value="Construction">Construction Crew</option>
					  <option value="WorkCrew">Work Crew</option>
					  <option value="Factory">Factory</option>
					</select>
					<input type="checkbox" id="hasLocation" name="HasLocation" value="Location">
					<label for="HasPhysicalLocation"> This Shop has a physical location</label><br>
					<!-- I want to replace this with a "select on a map" method, but that will have to come later.-->
				<label for="ShopAddress"><br>Where Is your Shop Located?</br></label>
					<input type="text" id="ShopAddress" name="ShopAddress" placeholder="Shop Address">
					<br>
					<input type="checkbox" id="MobileShop" name="MobileShop" value="MobileShop">
					<label for="MobileShop"> This shop has a physical location, but moves frequently</label><br>
				<br>
				<br>
				<button type="submit" name="ShopSignUpButton" value="ShopSignUpButton">Open your own Shop!!!</button>
			</form>
			<form  action="MenuItemAdd.php" method="post">
				<label for="ItemName"><br>What's the name of the new Menu Item?</br></label>
				<input type="text" id="ItemName" name="ItemName" placeholder="Item Name">
				<label for="ItemDesc"><br>What's a description of it?</br></label>
				<input type="text" id="ItemDesc" name="ItemDesc" placeholder="Item Description">
				<label for="ItemPrice"><br>How much does it cost?</br></label>
				<input type="text" id="ItemPrice" name="ItemPrice" placeholder="Price">	
				<label for="ItemAllergyInfo"><br>Any Allergy concerns?</br></label>
				<input type="text" id="AllergyInfo" name="AllergyInfo" placeholder="Dairy? Peanuts? Whey? Glutten? Other?">
				<br>
				<br>
				<button type="submit" name="MenuAddButton" value="MenuAddButton">Add Menu Item</button>
			</form>
			
		</div>
		<div Class="ProceedSignUpBox">
		<br>
			<form  action="ProfilePage.php" method="post">
				<button type="submit" name="HeroSignUpButton" value="SignUpButton">Done with the Paperwork!!!</button>
			</form>
		

</body>
</html>