<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<title>Coin & Castle</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

	<link href="css/coin.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Coin & Castle</h1>
	<!-- LUMBERYARD -->
	<section class="wood">
		<h2>Dark Forest</h2>
		<button class="btn brownX chopWood" onclick="chopWood(1)">CHOP WOOD</button>
		<div class="bar"><div class="inner"></div></div>
		<div><strong><span id="wood">0</span> Wood</strong></div>
	</section>

	<!-- CABIN -->
	<section class="buildCabin"  style="display:none;" >
		<div class="">
			<button class="btn yellowX" onclick="buildCabin()">BUILD CABIN</button>
			 <i>Cost: 3 Wood </i>
		</div>
	</section>

	<section class="cabin" style="display:none;" >
		<div><strong> Cabin LVL </strong><strong id="cabin">1</strong></div>
		<div class="upgradeCabin" style="display:none;">
			<button class="btn" onclick="upgradeCabin(1)">UPGRADE CABIN</button>
			 <i>Cost: X Wood </i>
		</div>
	</section>

<section class="buildLumberyard" style="display:none;">
	<button class="btn yellowX" onclick="buildLumberyard(1)">BUILD LUMBERYARD</button>
	<i>Cost: 5 Wood </i>
</section>
	<section class="lumberyard" style="display:none;" >
		<div><strong> Lumberyard LVL </strong><strong id="lumberyard">1</strong></div>
	</section>

<!-- MESSAGE POP UP -->
<div id="message"></div>
	<!-- CLEAR STORAGE BUTTON -->
	<a href="" class="btn" onclick="clearStorage()" style="font-size: 12px;margin:200px 30px 30px;display:block;">RESTART GAME - clearStorage()</a></div>
	<!-- SECOND COUNTER -->
	<div id="counter">BLAST OFF!</div>
</body>

	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script src="assets/js/coin.js"></script>
</html>
