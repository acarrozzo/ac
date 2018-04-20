// JavaScript Document


$(document).ready(function () {
	// ------ Toggle WEIGHT
	$('.toggleZoom').on('click', function () {
		$('#stickman').removeClass('').addClass('zoomX2');
	});


	$('.toggleHeavy').on('click', function () {
		$('#stickman').removeClass('light').addClass('heavy');
	});

	$('.toggleLight').on('click', function () {
		$('#stickman').removeClass('heavy').addClass('light');
	});
	$('.toggleMedium').on('click', function () {
		$('#stickman').removeClass('heavy').removeClass('light');
	});



	$('.toggleRound').on('click', function () {
		$('#stickman').removeClass('ellipse').removeClass('square').addClass('round');
	});
	$('.toggleEllipse').on('click', function () {
		$('#stickman').removeClass('round').removeClass('square').addClass('ellipse');
	});
	$('.toggleSquare').on('click', function () {
		$('#stickman').removeClass('round').removeClass('ellipse').addClass('square');
	});


	$('.toggleHuman').on('click', function () {
		$('#raceBox').removeClass('elven').removeClass('halfling').removeClass('dwarf');
	});
	$('.toggleElven').on('click', function () {
		$('#raceBox').removeClass('halfling').removeClass('dwarf').addClass('elven');
	});
	$('.toggleHalfling').on('click', function () {
		$('#raceBox').removeClass('elven').removeClass('dwarf').addClass('halfling');
	});
	$('.toggleDwarf').on('click', function () {
		$('#raceBox').removeClass('elven').removeClass('halfling').addClass('dwarf');
	});


	$('.toggleLeanBack').on('click', function () {
		$('#stickman').removeClass('leanForward').addClass('leanBack');
	});
	$('.toggleLeanForward').on('click', function () {
		$('#stickman').removeClass('leanBack').addClass('leanForward');
	});
	$('.toggleNoLean').on('click', function () {
		$('#stickman').removeClass('leanForward').removeClass('leanBack');
	});


	$('.toggleLeanL').on('click', function () {
		$('#skewBox').removeClass('leanR').addClass('leanL');
	});
	$('.toggleLeanR').on('click', function () {
		$('#skewBox').removeClass('leanL').addClass('leanR');
	});
	$('.toggleNoLean').on('click', function () {
		$('#skewBox').removeClass('leanL').removeClass('leanR');
	});



	$('.toggleArmRaise').on('click', function () {
		$('#equipped').removeClass().addClass('armRaise');
	});
	$('.toggleSword').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('armShield').addClass('armRaise');
		btnClick();
	});
	$('.toggle2h').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('arm2h');
		btnClick();
	});
	$('.toggleDagger').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('armShield').addClass('armDagger');
		btnClick();
	});
	$('.toggleAltDagger').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('armShield').addClass('armAltDagger');
		btnClick();
	});
	$('.toggleBo').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('arm2h').addClass('armBo');
		btnClick();
	});
	$('.toggleWarhammer').on('click', function () {		$('#equipped').removeClass().addClass('armWeapon').addClass('arm2h').addClass('armWarhammer');
		btnClick();
	});
	$('.toggleBattleAxe').on('click', function () {
		$('#equipped').removeClass().addClass('armWeapon').addClass('arm2h').addClass('armBattleAxe');
		btnClick();
	});
	$('.toggleReset').on('click', function () {
		$('#equipped').removeClass();
		$('#skewBox').removeClass();
		$('#raceBox').removeClass();
		$('#stickman').removeClass();
	});
 
    function btnClick() {
		$('.buttons span').removeClass('active');
		//$('.buttons span').closest().addClass('active');
		$('this').closest('.buttons span').addClass('active');
		$('this').addClass('active');
		
		
	}
});	

