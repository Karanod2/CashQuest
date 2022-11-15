<?php
	session_start();
		if (isset($_SESSION["UserID"])){
			include "Sidebar.php";
			include "PostedQuests.php";
			include "DBHandler.php";
			//include "ChooseQuestType.php";
			
			}
			else {header("location: SignUpPage.php?error=gobldygook");
			
			}?>
<html>
<head>
</head>
<body>
<div class = "CreateQuests" id="CreateQuests">
<!-- <p>This is the box where users create quests. obviously this is how you populate the box above. At first I want this to be a series of pages, but I think that I can make it a lot smoother once I learn JavaScript. For now though, this is just a FORM that starts the Create______Quests.php process.</p> -->
<Button id=CustomQuestBtn Type="Submit" onclick="CreateCustomQuest()">Custom Quest</button>
<Button id=FoodDeliveryBtn Type="Submit" onclick="CreateFoodDeliveryQuest()">Food Delivery</button>
<Button id=TaxiRequestBtn Type=button>Taxi Service</button>
<Button id=RoadRescueRequestBtn Type=button>Roadside Rescue</button>
<Button id=ShoppingDeliveryRequestBtn Type=button>Grocery/Store Delivery</button>
<Button id=CarRepairRequestBtn Type=button>Auto Repair</button>
<Button id=HomeRepairRequestBtn Type=button>Home Repair</button>
</div>
<script>



function CreateQuestReset(){
	document.getElementById("CreateQuests").innerHTML="<Button id=CustomQuestBtn Type='Submit' onclick='CreateCustomQuest()'>Custom Quest</button> <Button id=FoodDeliveryBtn Type='Submit' onclick='CreateFoodDeliveryQuest()'>Food Delivery</button> <Button id=TaxiRequestBtn Type=button>Taxi Service</button> <Button id=RoadRescueRequestBtn Type=button>Roadside Rescue</button> <Button id=ShoppingDeliveryRequestBtn Type=button>Grocery/Store Delivery</button> <Button id=CarRepairRequestBtn Type=button>Auto Repair</button> <Button id=HomeRepairRequestBtn Type=button>Home Repair</button>";
}

function CreateCustomQuest(){
	document.getElementById("CreateQuests").innerHTML="Create Custom Quest <br> <form action='CreateCustomQuest.php' method='POST' id='CreateCustomQuestForm'><Label for='QuestTitle'>Quest Title</label><br> <input type='text' id='QuestTitle' name='QuestTitle'><br><label for='QuestInst'>Quest Instructions</label><br><Input type='text' id='QuestInst' name='QuestInst'><br><label for='QuestLoc1'>Location 1</label><Input type='text' id='QuestLoc1' name='QuestLoc1'><label for='QuestLoc2'>Location 2</label><Input type='text' id='QuestLoc2' name='QuestLoc2'><label for='QuestLoc3'>Location 3</label><Input type='text' id='QuestLoc3' name='QuestLoc3'><br><Label for='QuestRew'>Quest Reward</label><Input type='text' id='QuestRew' name='QuestRew'><Label for='AcceptFirst'>Accept the first hero who volunteers for this Quest?</label><input type='checkbox' id='AcceptFirst' name='AcceptFirst' checked><INPUT type='submit' name='CreateCustomQuestBtn' value='Create Custom Quest!!!'></form> <Button id=CreateQuestReset Type='Submit' onclick='CreateQuestReset()'>Cancel</button>";
}
function CreateFoodDeliveryQuest(){
	document.getElementById("CreateQuests").innerHTML="Food Delivery Quest 
	
	 <input type='text' name='restname' list='restaurants' placeholder='Where do you want food from?'> <datalist id='restaurants'> <?php $select = $con -> query('SELECT ShopName FROM shopdb WHERE ShopType = 1'); while ($row=$select -> fetch_assoc()){?><option value='<?php echo $row['ShopName']?>'/> <?php } ?> </datalist>
	
	
	<form action='CreateFoodDeliveryQuest.php' method='POST' id='CreateFoodDeliveryQuestForm'><lable for='QuestTitle'>Quest Title: </lable> <input type='text' id='QuestTitle' name='QuestTitle' placeholder='Questgiver needs food badly!'> <br> Where do you want food from <br> 	<br> What do you want from there(this needs ot be a dropdown menu that displays the selected resteraunts menu)<br> <button id=AddSecondaryLocation type=button>Add a second resteraunt to deliver food from</button> <br> Where shall we deliver it to? <br> And how much are you offering for delivery?<br> Next is a list of everything on your order <br> Here we display a running total for your order <br> </form><Button id=CreateQuestReset Type='Submit' onclick='CreateQuestReset()'>Cancel</button>";
}

</script>
</body>
</html>