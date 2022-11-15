<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="CurrentFunds">
	<h1>Current Funds</h1>
	<p>This pannel shows your current funds. I plan to use Blockchain tech to ensure transperancy and good bookkeeping, but that's a long way down the road. For know all we need to know is that 1¢= one Copper. $1 is equal to one Silver. $10 is worth a Gold and a platinum coin is worth $1k. All these values are stored as Silver since 1S=$1 but are output as Platinum Gold and Silver. We want our players to feel rich when they earn a Gold, and encourage tipping by saying that only cheapskates tip in Silver.</p>
	<?php
	$PlayerPlatinum = floor($_SESSION['WalletValue']/1000);
	//echo ($PlayerPlatinum), " Platinum";
	$PlayerGold = floor(($_SESSION['WalletValue']-($PlayerPlatinum*1000))/10);
	//Echo $PlayerGold, " Gold";
	$PlayerSilver = floor((($_SESSION['WalletValue']-($PlayerPlatinum*1000))-($PlayerGold*10)));
	$PlayerCopper = floor((($_SESSION['WalletValue']-($PlayerPlatinum*1000))-($PlayerGold*10)-($PlayerSilver))*100);
	//Echo $PlayerSilver, "Silver";
	 echo $PlayerPlatinum, " Plat. ", $PlayerGold, " Gold ", $PlayerSilver, " Silver ", $PlayerCopper, " Copper";
	?>
</div>
</body>
</html>