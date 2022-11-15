<!doctype HTML>
<HTML>
<head>
<?php
	include "DBHandler.php";
	?>
</head>
<body>
<div id="RestSelect">
	<input type='text' name='restname' list='rest' placeholder='Where do you want food from?' style="width:1000px">
	<datalist id='rest'>
	<?php
		$select = $conn -> query("SELECT ShopName FROM shopdb WHERE ShopType = 1"); 
		while ($row = $select -> fetch_assoc() ){?>
		<option value="<?php echo $row["ShopName"] ?>" />
	<?php } ?> 
	
	</datalist>
	<button name="SelectRest" type="button" onclick="pullmenu()">Select Restaraunt</button>
</div>
<p id="TempOutput"></p>
</form>
</body>
<script>
 function pullmenu(){
	 const name = document.getElementById('restname');
	 const temp = document.getElementById('TempOutput');
document.getElementById("RestSelect").innerHTML += "<br> My First JavaScript";
temp.innerHTML = name.value;
 }
</script>
</html>