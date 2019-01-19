(function(){function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}return e})()({1:[function(require,module,exports){
'use strict';

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
	chopWood = function chopWood(number) {
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

	checkCabin = function checkCabin() {
		if (cabin >= 1) {
			$('.cabin').show();
			$('.upgradeCabin').show();
			$('.buildLumberyard').show();
		} else if (wood >= 1) {
			$('.buildCabin').show();
		}
	};
	// ----------- STEP 2: BUILD CABIN
	buildCabin = function buildCabin() {
		if (wood < 5) {
			setMessage('You don\'t have enough wood to build a cabin!'); // set message
		} else {
			parseInt(localStorage.setItem('wood', wood = wood - 5));
			parseInt(localStorage.setItem('cabin', cabin = 1));
			$('.cabin').show();
			$('.upgradeCabin').show();
			$('.buildCabin').hide();
			setMessage('You build a cozy cabin. Not too shabby! (-5 wood)'); // set message
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
	clearStorage = function clearStorage() {
		localStorage.clear();
		localStorage.setItem('counter', '0');
	};

	// ----------- SET MESSAGE
	setMessage = function setMessage(message) {
		$('#message').addClass('active').html(message);
		setTimeout(function () {
			$('#message').removeClass('active');
		}, 5000);
	};

	// ------------------------------------------------------- REFRESH VARIABLES
	refreshVariables = function refreshVariables() {
		// WRITE ALL STATS
		$('#wood').html(wood);
		$('#counter').html(counter);
		$('#cabin').html(cabin);

		checkCabin();

		console.log('wood' + wood + ' cabin' + cabin + ' farm' + farm + ' food' + food + ' lumberyard' + lumberyard + ' stonemine' + stonemine + ' stone' + stone);
	};

	refreshVariables(); //initial display function
}); // ------ END DOC REDY

},{}]},{},[1]);
