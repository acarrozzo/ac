$(document).ready(function () {

	if (localStorage.getItem("wood") === null) {
		localStorage.setItem('wood', JSON.stringify(0));
		localStorage.setItem('cabin', JSON.stringify(0));
		localStorage.setItem('farm', JSON.stringify(0));
		localStorage.setItem('food', JSON.stringify(0));
		localStorage.setItem('lumberyard', JSON.stringify(0));
		localStorage.setItem('stonemine', JSON.stringify(0));
		localStorage.setItem('stone', JSON.stringify(0));
	}

	var wood = parseInt(localStorage.getItem('wood'));
	var cabin = parseInt(localStorage.getItem('cabin'));
	var farm = parseInt(localStorage.getItem('farm'));
	var food = parseInt(localStorage.getItem('food'));
	var lumberyard = parseInt(localStorage.getItem('lumberyard'));
	var stonemine = parseInt(localStorage.getItem('stonemine'));
	var stone = parseInt(localStorage.getItem('stone'));
	//	var woodAuto = parseInt(localStorage.getItem('woodAuto'));
	//	var woodPerSec = parseInt(localStorage.getItem('woodPerSec'));


	// ----------- STEP 1: CHOP WOOD
	chopWood = function (number) {
		console.log('CHOP WOOD + 1');
		setMessage('You chop some wood +1'); // set message
		$('.chopWood').addClass('disabled');
		$('.wood .bar').addClass('once');
		//refreshVariables();
		setTimeout(function () {
			$('.wood .bar').removeClass('once');
			$('.wood button').removeClass('disabled');
			wood = wood + number + 2;
			parseInt(localStorage.setItem('wood', wood));
			refreshVariables();
		}, 1000);
		refreshVariables();
	};
	// ----------- STEP X: auto WOOD
	autoWood = function (number) {
		console.log('AUTO WOOD + 1');
		setMessage('You auto chop some wood +1'); // set message
		$('.chopWood').addClass('disabled');
		$('.wood .bar').addClass('infinite');
		//refreshVariables();
		setTimeout(function () {
			//	$('.wood .bar').removeClass('once');
			//		$('.wood button').removeClass('disabled');
			wood = wood + number;
			parseInt(localStorage.setItem('wood', wood));
			refreshVariables();
		}, 1000);
		refreshVariables();
	};
	checkCabin = function () {
		if (lumberyard >= 1) {
			setInterval(autoWood, 1000);
		}
		if (cabin >= 1) {
			$('.cabin').show();
			$('.upgradeCabin').show();
			if (lumberyard < 1) {
				$('.buildLumberyard').show();
			}
		} else if (wood >= 1) {
			$('.buildCabin').show();
		}
	};
	// ----------- STEP 2: BUILD CABIN
	buildCabin = function () {
		if (wood < 3) {
			setMessage('You don\'t have enough wood to build a cabin!'); // set message
		} else {
			parseInt(localStorage.setItem('wood', wood = wood - 3));
			parseInt(localStorage.setItem('cabin', cabin = 1));
			$('.cabin').show();
			$('.upgradeCabin').show();
			$('.buildCabin').hide();
			setMessage('You build a cozy cabin. Not too shabby! (-3 wood)'); // set message
			refreshVariables();

		}
	};
	// ----------- STEP 2.1: BUILD LUMBERYARD
	buildLumberyard = function () {
		if (wood < 5) {
			setMessage('You don\'t have enough wood to build a lumberyard!'); // set message
		} else {
			parseInt(localStorage.setItem('wood', wood = wood - 5));
			parseInt(localStorage.setItem('lumberyard', lumberyard = 1));
			$('.lumberyard').show();
			$('.upgradeLumberyard').show();
			$('.buildLumberyard').hide();
			setMessage('You build a lumberyard. Time to get chopping ! (-5 wood)'); // set message
			refreshVariables();

		}
	};



	// ----------- COUNTER - 1 second
	counter = parseInt(localStorage.getItem('counter'));
	setInterval(function () {
		++counter;
		$('#counter').html(counter);
		localStorage.setItem('counter', counter);
		refreshVariables();
	}, 1000);

	// ----------- CLEAR STORAGE
	clearStorage = function () {
		localStorage.clear();
		localStorage.setItem('counter', '0');
	};

	// ----------- SET MESSAGE
	setMessage = function (message) {
		$('#message').addClass('active').html(message);
		setTimeout(function () {
			$('#message').removeClass('active');
		}, 5000);
	};

	// ------------------------------------------------------- REFRESH VARIABLES
	refreshVariables = function () {
		// WRITE ALL STATS
		$('#wood').html(wood);
		$('#counter').html(counter);
		$('#cabin').html(cabin);

		checkCabin();

		console.log('wood' + wood + ' cabin' + cabin + ' farm' + farm + ' food' + food + ' lumberyard' + lumberyard + ' stonemine' + stonemine + ' stone' + stone);

	};

	refreshVariables(); //initial display function
}); // ------ END DOC REDY