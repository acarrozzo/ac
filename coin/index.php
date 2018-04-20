<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<title>Coin & Castle</title>
	<style>
		*,
		*:before,
		*:after {
			box-sizing: border-box;
		}
		
		body {
			font-size: 18px;
			font-family: Courier, "Courier New", "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
			padding: 0;
			margin: 0;
			letter-spacing: -0.02em;
			text-align:center;
		}
		
		h1 {
			font-size: 18px;
			padding: 5px 15px;
			margin: 0 0px 10px;
			background: #000;
			color: #ccc;
		}
		
		p {
			margin: 0;
			padding: 0;
		}
		
		i {
			color: #999;
			font-size: 80%;
			font-style:normal;
		}
		
		section {
			margin: 15px;
			margin: 20px 20px 40px; 
		}
		
		#message {
			padding: 15px 25px 15px 15px;
			opacity: 0;
			transition: 2s all;
			background: #eee;
			display: inline-block;
		}
		
		#message.active {
			opacity: 1;
			transition: 0s all;
		}
		
		#counter {
			position: absolute;
			bottom: 0;
			right: 0;
			font-size: 12px;
			margin: 15px;
			color: #999;
		}
		
		button {
border: 0;
	background: 0;
	font-family: courier;
	text-decoration: underline;
	font-size: 18px; 
	cursor: pointer;
	padding: 2px 0;
	background: #fff;
	padding: 3px 10px;
	margin: 2px;
	border-radius: 5px;
		}
		
		[class*="Stat"] {
			margin:0 10px;
			display: inline-block;
		}
		
		
	</style>

</head>

<body>
	<h1>Coin & Castle</h1>
	<section>
		<span class="coinStat"><span id="coin">0</span> coin</span>
		<!--<span class="woodStat"><span id="wood">0</span>/<span id="woodMax">0</span> wood </span>
		<span class="stoneStat"><span id="stone">0</span>/<span id="stoneMax">0</span> stone</span>-->
		<span class="populationStat"><span id="population">0</span>/<span id="populationMax">0</span> population</span>
	</section>

	<section class="buildShack">
		<button id="" class="" onclick="buildShack()">BUILD SHACK</button>
		<i>cost: 5 wood, 5 stone</i>
	</section>

	<section class="townHall">

		<div class="townHall1">
			<div><strong>LVL 1 SMALL SHACK</strong>
			</div>
			<button id="" class="" onclick="upgradetownHall1()">upgrade</button> <i>cost: 10w, 10s</i>
		</div>

		<div class="townHall2">
			<div><strong>LVL 2 SMALL CABIN</strong>
			</div>
			<button id="" class="" onclick="upgradetownHall2()">upgrade</button> <i>cost: 20wood, 20stone, 2pop</i>
		</div>

		<div class="townHall3" style="display:none;">
			<div><strong>LVL 3 BIG CABIN</strong>
			</div>
			<button id="" class="" onclick="upgradetownHall3()">upgrade</button> <i>cost: 30w, 30s</i>
		</div>

		<div class="townHall3" style="display:none;">
			<div><strong>LVL 4 BIG CABIN</strong>
			</div>
			<button id="" class="" onclick="upgradetownHall4()">upgrade</button> <i>cost: 40w, 40s</i>
		</div>


		<section class="controls">
			<p>Workers Working: <span id="working"></span>/<span id="workingMax"></span>
			</p>
			<p>
				<button id="" class="" onclick="chopWood(5)">CHOP WOOD</button> ( <button onclick="woodMinus()">-</button>
				<span id="woodAuto"></span>
				<button onclick="woodPlus()">+</button> )
				+<span id="woodPerSec"></span> wood/sec
						<span class="woodStat"><span id="wood">0</span><i>/<span id="woodMax">0</span></i> wood </span>
			</p>

			<p>
				<button id="" class="" onclick="mineStone(5)">MINE STONE</button> ( <button onclick="stoneMinus()">-</button>
				<span id="stoneAuto"></span>
				<button onclick="stonePlus()">+</button> )
				+<span id="stonePerSec"></span> stone/sec
						<span class="stoneStat"><span id="stone">0</span><i>/<span id="stoneMax">0</span></i> stone </span>
			</p>
		</section>


	</section>



	<section class="pickUpCoin">
		<button id="" class="" onclick="pickUpCoin()">Pick Up Coin</button>
	</section>

	<section class="chopWood">
		<button id="" class="" onclick="chopWood(1)">CHOP WOOD</button>
		<p class="mineStone">
			<button id="" class="" onclick="mineStone(1)">MINE STONE</button>
		</p>
	</section>

	<!--	<section class="openShop">
	<button id="" class="" onclick="">Shop</button>
	</section>
	-->
	<!--<section id="" class="">-->
	<!--<strong>SHOP</strong>-->
	<section class="buyHatchet">
		<button class="" id="" onclick="buyHatchet()">Buy Hatchet</button>
		<i>cost: 1 coin</i>
	</section>
	<section class="buyPickaxe">
		<button class="" id="" onclick="buyPickaxe()">Buy Pickaxe</button>
		<i>cost: 1 coin</i>
	</section>

	<section class="trainWorker">
		<button class="" id="" onclick="trainWorker()">Train Worker</button>
		<i>time: 10 seconds</i>
	</section>
	<section class="trainingWorker">
		Worker Training <i>X</i>
	</section>

	<!--<section class="closeShop">
			<button class="" id="" onclick="">Exit Shop</button>
		</section>-->
	<!--</section>-->

	<br/><br/>
	<br/>

	<a href="" class="" id="" onclick="clearStorage()" style="font-size: 12px;position: absolute;bottom: 15px;
	left: 15px;">RESTART GAME - clearStorage()</a>

	<div id="message"></div>
	<div id="counter">BLAST OFF!</div>

</body>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script>
	if ( localStorage.getItem( "coin" ) === null ) {
		localStorage.setItem( 'coin', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "coinMax" ) === null ) {
		localStorage.setItem( 'coinMax', JSON.stringify( 1 ) );
	}
	if ( localStorage.getItem( "wood" ) === null ) {
		localStorage.setItem( 'wood', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "woodMax" ) === null ) {
		localStorage.setItem( 'woodMax', JSON.stringify( 5 ) );
	}
	if ( localStorage.getItem( "stone" ) === null ) {
		localStorage.setItem( 'stone', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "stoneMax" ) === null ) {
		localStorage.setItem( 'stoneMax', JSON.stringify( 5 ) );
	}
	if ( localStorage.getItem( "population" ) === null ) {
		localStorage.setItem( 'population', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "populationMax" ) === null ) {
		localStorage.setItem( 'populationMax', JSON.stringify( 1 ) );
	}
	if ( localStorage.getItem( "hatchet" ) === null ) {
		localStorage.setItem( 'hatchet', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "pickaxe" ) === null ) {
		localStorage.setItem( 'pickaxe', JSON.stringify( 0 ) );
	}

	if ( localStorage.getItem( "townHall" ) === null ) {
		localStorage.setItem( 'townHall', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "shack" ) === null ) {
		localStorage.setItem( 'shack', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "counter" ) === null ) {
		localStorage.setItem( 'counter', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "woodAuto" ) === null ) {
		localStorage.setItem( 'woodAuto', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "woodPerSec" ) === null ) {
		localStorage.setItem( 'woodPerSec', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "stoneAuto" ) === null ) {
		localStorage.setItem( 'stoneAuto', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "stonePerSec" ) === null ) {
		localStorage.setItem( 'stonePerSec', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "working" ) === null ) {
		localStorage.setItem( 'working', JSON.stringify( 0 ) );
	}
	if ( localStorage.getItem( "workingMax" ) === null ) {
		localStorage.setItem( 'workingMax', JSON.stringify( 0 ) );
	}



	// GET ALL STATS
	var coin = parseInt( localStorage.getItem( 'coin' ) );
	var coinMax = parseInt( localStorage.getItem( 'coinMax' ) );
	var wood = parseInt( localStorage.getItem( 'wood' ) );
	var woodMax = parseInt( localStorage.getItem( 'woodMax' ) );
	var stone = parseInt( localStorage.getItem( 'stone' ) );
	var stoneMax = parseInt( localStorage.getItem( 'stoneMax' ) );
	var population = parseInt( localStorage.getItem( 'population' ) );
	var populationMax = parseInt( localStorage.getItem( 'populationMax' ) );
	var hatchet = parseInt( localStorage.getItem( 'hatchet' ) );
	var pickaxe = parseInt( localStorage.getItem( 'pickaxe' ) );

	var townHall = parseInt( localStorage.getItem( 'townHall' ) );
	var shack = parseInt( localStorage.getItem( 'shack' ) );

	var woodAuto = parseInt( localStorage.getItem( 'woodAuto' ) );
	var woodPerSec = parseInt( localStorage.getItem( 'woodPerSec' ) );
	var stoneAuto = parseInt( localStorage.getItem( 'stoneAuto' ) );
	var stonePerSec = parseInt( localStorage.getItem( 'stonePerSec' ) );
	var working = parseInt( localStorage.getItem( 'working' ) );
	var workingMax = parseInt( localStorage.getItem( 'workingMax' ) );


	var counter = parseInt( localStorage.getItem( 'counter' ) );
	setInterval( function () {
		++counter;
		$( '#counter' ).html( counter );
		localStorage.setItem( 'counter', counter );

		if ( wood <= ( woodMax - woodAuto ) ) {
			parseInt( localStorage.setItem( 'wood', wood = wood + woodAuto ) );
		}
		if ( stone <= ( stoneMax - stoneAuto ) ) {
			parseInt( localStorage.setItem( 'stone', stone = stone + stoneAuto ) );
		}

		refreshVariables();
	}, 1000 );

	function clearStorage() {
		localStorage.clear();
		localStorage.setItem( 'counter', '0' );
	}



	function setMessage( message ) {
		$( '#message' ).addClass( 'active' ).html( message );
		setTimeout( function () {
			$( '#message' ).removeClass( 'active' );
		}, 5000 );
	}


	function trainWorker() {
		if ( population >= populationMax ) {
			setMessage( 'You can\'t train anymore workers!' ); // set message
		} else {
			$( '.trainWorker' ).hide();
			setMessage( 'You start training an ambitious young person!' ); // set message
			setTimeout( function () {
				parseInt( localStorage.setItem( 'population', population = population + 1 ) );
				parseInt( localStorage.setItem( 'workingMax', workingMax = population ) );
				//parseInt( localStorage.setItem( 'working', working = working - 1 ) );
				setMessage( 'You train a worker!' ); // set message
			}, 3000 );
			
			 if (count > 0) {
			   var d = document.getElementsByClassName("trainingWorker");
			   d.innerHTML = count;
			   setTimeout (function() { countDown(count-1); }, 1000);
			 }
			 countDown(5);

		}
		refreshVariables();
	}


	function pickUpCoin() {
		if ( coin >= coinMax ) {
			setMessage( 'You can\'t pick up anymore coin' ); // set message
		} else {
			coin = coin + 1;
			parseInt( localStorage.setItem( 'coin', coin ) );
			setMessage( 'You pick up a coin' ); // set message
		}
		refreshVariables();
	}


	function chopWood( number ) {
		if ( wood >= woodMax ) {
			setMessage( 'You can\'t chop anymore wood!' ); // set message
		} else {
			wood = wood + number;
			console.log( wood );
			parseInt( localStorage.setItem( 'wood', wood ) );
			setMessage( 'You chop some wood +1' ); // set message
			if ( wood == 5 && shack == 0 ) {
				coin = coin + 1;
				parseInt( localStorage.setItem( 'coin', coin ) );
				setMessage( 'You find another coin! Look at that!' ); // set message
			}
		}
		refreshVariables();
	}

	function mineStone( number ) {
		if ( stone >= stoneMax ) {
			setMessage( 'You can\'t mine anymore stone!' ); // set message
		} else {
			stone = stone + number;
			parseInt( localStorage.setItem( 'stone', stone ) );
			setMessage( 'You mine some stone +1' ); // set message
		}
		refreshVariables();
	}

	function buyHatchet() {
		hatchet = hatchet + 1;
		parseInt( localStorage.setItem( 'hatchet', hatchet ) );
		coin = coin - 1;
		parseInt( localStorage.setItem( 'coin', coin ) );
		setMessage( 'You buy a hatchet for 1 coin.' ); // set message
		refreshVariables();
	}

	function buyPickaxe() {
		pickaxe = pickaxe + 1;
		parseInt( localStorage.setItem( 'pickaxe', pickaxe ) );
		coin = coin - 1;
		parseInt( localStorage.setItem( 'coin', coin ) );
		setMessage( 'You buy a pickaxe for 1 coin.' ); // set message
		refreshVariables();
	}

	function buildShack() {
		parseInt( localStorage.setItem( 'townHall', townHall = 1 ) );
		parseInt( localStorage.setItem( 'shack', shack = 1 ) );
		parseInt( localStorage.setItem( 'wood', wood = wood - 5 ) );
		parseInt( localStorage.setItem( 'stone', stone = stone - 5 ) );
		parseInt( localStorage.setItem( 'woodMax', woodMax = 10 ) );
		parseInt( localStorage.setItem( 'stoneMax', stoneMax = 10 ) );
		parseInt( localStorage.setItem( 'woodPerSec', woodPerSec = 0 ) );
		parseInt( localStorage.setItem( 'stonePerSec', stonePerSec = 0 ) );
		parseInt( localStorage.setItem( 'population', population = 1 ) );
		parseInt( localStorage.setItem( 'populationMax', populationMax = 1 ) );
		parseInt( localStorage.setItem( 'working', working = 0 ) );
		parseInt( localStorage.setItem( 'workingMax', workingMax = population ) );

		setMessage( 'You build a small shack. Not too shabby!' ); // set message
		refreshVariables();
	}


	function upgradetownHall1() {
		if ( wood >= 10 && stone >= 10 ) {
			parseInt( localStorage.setItem( 'townHall', townHall = 2 ) );
			parseInt( localStorage.setItem( 'wood', wood = wood - 10 ) );
			parseInt( localStorage.setItem( 'stone', stone = stone - 10 ) );
			parseInt( localStorage.setItem( 'woodMax', woodMax = 20 ) );
			parseInt( localStorage.setItem( 'stoneMax', stoneMax = 20 ) );
			parseInt( localStorage.setItem( 'populationMax', populationMax = 2 ) );
			parseInt( localStorage.setItem( 'workingMax', workingMax = population ) );

			setMessage( 'You upgrade your shack!' ); // set message
			refreshVariables();
		} else {
			setMessage( 'You don\'t have what you need to upgrade!' ); // set message
		}
	}

	function woodPlus() {
		if ( working >= population ) {
			setMessage( 'You don\'t have anymore workers to assign!' ); // set message
		} else {
			parseInt( localStorage.setItem( 'woodAuto', woodAuto = woodAuto + 1 ) );
			parseInt( localStorage.setItem( 'working', working = working + 1 ) );
			setMessage( 'You assign a worker to chop wood' ); // set message
		}
		refreshVariables();
	}

	function woodMinus() {
		if ( woodAuto <= 0 ) {
			setMessage( 'You don\'t have anyone left chopping wood!' ); // set message
		} else {
			parseInt( localStorage.setItem( 'woodAuto', woodAuto = woodAuto - 1 ) );
			parseInt( localStorage.setItem( 'working', working = working - 1 ) );
			setMessage( 'You remove an assigned worker' ); // set message
		}
		refreshVariables();
	}

	function stonePlus() {
		if ( working >= population ) {
			setMessage( 'You don\'t have anymore workers to assign!' ); // set message
		} else {
			parseInt( localStorage.setItem( 'stoneAuto', stoneAuto = stoneAuto + 1 ) );
			parseInt( localStorage.setItem( 'working', working = working + 1 ) );
			setMessage( 'You assign a worker to mine stone' ); // set message
		}
		refreshVariables();
	}

	function stoneMinus() {
		if ( stoneAuto <= 0 ) {
			setMessage( 'You don\'t have anyone left mining stone!' ); // set message
		} else {
			parseInt( localStorage.setItem( 'stoneAuto', stoneAuto = stoneAuto - 1 ) );
			parseInt( localStorage.setItem( 'working', working = working - 1 ) );
			setMessage( 'You remove an assigned worker' ); // set message
		}
		refreshVariables();
	}




	function refreshVariables() {


		// WRITE ALL STATS
		$( '#coin' ).html( coin );
		$( '#coinMax' ).html( coinMax );
		$( '#wood' ).html( wood );
		$( '#woodMax' ).html( woodMax );
		$( '#stone' ).html( stone );
		$( '#stoneMax' ).html( stoneMax );

		$( '#population' ).html( population );
		$( '#populationMax' ).html( populationMax );

		$( '#hatchet' ).html( hatchet );
		$( '#pickaxe' ).html( pickaxe );

		$( '#counter' ).html( counter );

		$( '#woodAuto' ).html( woodAuto );
		$( '#woodPerSec' ).html( woodAuto );

		$( '#stoneAuto' ).html( stoneAuto );
		$( '#stonePerSec' ).html( stoneAuto );

		$( '#working' ).html( working );
		$( '#workingMax' ).html( workingMax );



		// HIDE ITEMS
		$( '.pickUpCoin' ).hide();

		$( '.chopWood' ).hide();
		$( '.mineStone' ).hide();

		$( '.buyHatchet' ).hide();
		$( '.buyPickaxe' ).hide();

		$( '.buildShack' ).hide();

		$( '.townHall' ).hide();
		$( '.townHall1' ).hide();
		$( '.townHall2' ).hide();
		$( '.shack' ).hide();
		$( '.populationStat' ).hide();
		$( '.trainWorker' ).hide();


		if ( townHall == 0 ) {
			$( '.woodStat' ).hide();
			$( '.stoneStat' ).hide();
		}
		// BEGIN GAME STATES
		if ( coin == 0 && hatchet == 0 ) {
			//$( '.coinStat' ).hide();
			$( '.pickUpCoin' ).show(); // shows pick up coin button

			//document.getElementById("coin").innerHTML = '<span class="coinStat"><span id="coin">0</span> coin</span>';
			//document.write('<span class="coinStat"><span id="coin"></span> coin</span>');


		}
		if ( coin >= 1 && hatchet == 0 ) {
			//$( '.openShop' ).show(); // shows SHOP button
			$( '.buyHatchet' ).show();
		}

		if ( hatchet >= 1 && townHall <= 1 ) {
			$( '.chopWood' ).show(); // shows CHOP WOOD button
			$( '.woodStat' ).show();
		}

		if ( coin >= 1 && hatchet == 1 && pickaxe == 0 ) {
			$( '.buyPickaxe' ).show();
		}

		if ( pickaxe >= 1 && townHall <= 1 ) {
			$( '.mineStone' ).show();
			$( '.stoneStat' ).show();
		}

		if ( wood >= 5 && stone >= 5 && townHall == 0 ) {
			$( '.buildShack' ).show();
		}

		if ( townHall >= 1 ) {
			$( '.townHall' ).show();
			$( '.populationStat' ).show();
		}
		if ( townHall == 1 ) {
			$( '.townHall1' ).show();
			$( '.controls' ).hide();
		}
		if ( townHall >= 2 ) {
			$( '.trainWorker' ).show();
			$( '.controls' ).show();
		}
		if ( townHall == 2 ) {
			$( '.townHall2' ).show();
		}



	}

	refreshVariables(); //initial display function
</script>




</html>