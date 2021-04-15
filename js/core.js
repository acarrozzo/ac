// JavaScript Document


// SlidesJS Required ----->
// WALLPAPERS SLIDES
$(function () {
	$("[id^=slides].wallpapers").slidesjs({ // any id that starts with slides will work
		width: 1000,
		height: 625,
		navigation: true

	});
});

$(function () {
	$("[id^=slides].landscape").slidesjs({ // any id that starts with slides will work
		width: 1280,
		height: 720,
		navigation: true

	});
});


// DEFAULT SLIDES
$(function () {
	$("[id^=slides]").slidesjs({ // any id that starts with slides will work
		width: 1000,
		height: 576,
		navigation: true
	});
});

// MAX FULL SCREEN
/* $( ".maxBtn" ).on( "click", function (e) {
		if ( $( '[id^=slides]' ).hasClass( 'max' ) ) {
			$( '[id^=slides]' ).removeClass( 'max' ); // makes close icon spin back into menu icon
		} else {
			$(this).siblings('[id^=slides]').addClass( 'max' );
			//this.update();
		}
	} ); //End mbtn click

*/

// ---- NAV / MENU BUTTON - OPENS MENU
/*
	$( ".menuBtn" ).on( "click", function (e) {
		e.preventDefault();
		if ( $( 'body' ).hasClass( 'menuOpen' ) ) {
			$( 'body' ).removeClass( 'menuOpen' ); // makes close icon spin back into menu icon
		} else {
			$( 'body' ).addClass( 'menuOpen' ); // makes menu icon spin around when clicked, turn into close icon
		}
	} ); //End mbtn click


// ---- THE TOGGLE - SWAPS .alt on the body. maybe use for time of day

	$( ".theToggle" ).on( "click", function (e) {
		e.preventDefault();
		if ( $( 'body' ).hasClass( 'toggle' ) ) {
			$( 'body' ).removeClass( 'toggle' ); // makes close icon spin back into menu icon
		} else {
			$( 'body' ).addClass( 'toggle' ); // makes menu icon spin around when clicked, turn into close icon
		}
	} ); //End mbtn click


// ---- MINUS BUTTON - opens up alternative menu
	$( ".minusBtn, .minus" ).on( "click", function (e) {
		e.preventDefault();
		if ( $( 'body' ).hasClass( 'minusOpen' ) ) {
			$( 'body' ).removeClass( 'minusOpen' ); // makes close icon spin back into menu icon
		} else {
			$( 'body' ).addClass( 'minusOpen' ); // makes menu icon spin around when clicked, turn into close icon
		}
	} ); //End mbtn click

	*/


$(".result").click(function (e) {
	e.preventDefault();
	$("#content").load("web.php");
});

// ---------- MORE TEXT
$(".readMore").click(function (e) {
	e.preventDefault();
	$(this).fadeOut().parent().next().slideDown();
});





//$('[data-pop]').on("click", function (e) {
$('[data-pop]').on("click", function () {
	//e.preventDefault();
	$(this).toggleClass("full");
});


$("[data-pop].gal").append("<i class='fa fa-angle-right nextFig'></i>");
$("[data-pop].gal").prepend("<i class='fa fa-angle-left prevFig'></i>");


$('.nextFig').on("click", function (e) {
	//e.preventDefault();
	e.stopPropagation();
	$(this).parent("[data-pop]").toggleClass("full");
	$(this).parent("[data-pop]").nextAll("[data-pop]").first().addClass("full");
});

$('.prevFig').on("click", function (e) {
	//e.preventDefault();
	e.stopPropagation();
	$(this).parent("[data-pop]").toggleClass("full");
	$(this).parent("[data-pop]").prevAll("[data-pop]").first().addClass("full");
});



// ----- AC CUSTOM COLLAPSER FUNCTION ----->


/* --- .on("click")

first, you anchor `.on` to `$("body")` so that the bind gets applied to injected elements

and secondly because `.click` also is used to simulate a click and I think that's gross


also `.closest` should be reserved for use on ancestors

I've heard of circumstances of it working with siblings, but it never has for me
`.next` and `.prev` are used for direct siblings
but really, it's usually best to find the `.closest` shared ancestor and then `.find` the element you want from there

-->
*/
/*
	$(".expandBtn").on("click",function(e){
    $(this).closest(".collapser").toggleClass("expanded");
    $(this).children(".fa").toggleClass("fa-angle-up").toggleClass("fa-angle-down");
    });
	*/
if ($(window).width() >= 800) {
	$('.collapser').each(function(){
		if($(this).hasClass('justTablet')) {
			$(this).addClass("expanded");
		}
	});
}

if ($(window).width() >= 800) {
	$('.collapser').each(function(){
		if($(this).hasClass('justMobile')) {
			$(this).addClass("expanded");
		}
	});
}



$('.nav-column li').each(function(){

});


$(".collapser").on("click", function () {
	item=$(this);
	if (item.is('.expanded')) {
		item.next('.collapserContent').slideUp(500);
		setTimeout(function(){
            item.toggleClass('expanded');
      },450);
	}
	else {
		item.next('.collapserContent').slideDown(500);
        item.toggleClass('expanded');
	}
});


$(".collapser:not(.expanded)").on("click", function (e) {

});



/*--  TC + MIKE CANNON PROJECT - JS REFERENCE

$(".addInput").on("click",function(e){
	e.preventDefault();

 	var ele = $(this),
		parent = ele.closest(".table_calculator"),
		container = parent.find(".inputContain"),
		last_input = container.find("input[type='text']").last(),
		input_count = parseInt(last_input.attr("name").match(/([0-9]+)$/)),
		markup = last_input[0].outerHTML,
		new_element;

	input_count++;

	container.append(markup);

	new_element = container.find("input[type='text']").last();

	new_element.attr("name", "s" + (input_count));

	if(input_count >= 5){
		$(".addInput").addClass("hide");
	}


});



-->



	<!--
<script>
			$(function() {
				var demo1 = $("[id^=gallery]").slippry({
					//transition: 'horizontal',
					// useCSS: true,
					// speed: 1000,
					// pause: 3000,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function () {
					demo1.stopAuto();
				});

				$('.start').click(function () {
					demo1.startAuto();
				});

				$('.prev').click(function () {
					demo1.goToPrevSlide();
					return false;
				});
				$('.next').click(function () {
					demo1.goToNextSlide();
					return false;
				});
				$('.reset').click(function () {
					demo1.destroySlider();
					return false;
				});
				$('.reload').click(function () {
					demo1.reloadSlider();
					return false;
				});
				$('.init').click(function () {
					demo1 = $("#demo1").slippry();
					return false;
				});
			});
		</script>

-->
*/

// ---- CORE JS - AC - 2021


// ---- APPLY TIME
// ---- APPLY TIME
// ---- APPLY TIME
function applyTime(){
	var date = new Date();
	    var hours = date.getHours();
			if (hours >= 6 && hours < 18) {
	        $('body').addClass('day');
	    }
	    if (hours >= 18 || hours < 6) {
	        $('body').addClass('night');
	    }
	  //  if (hours >= 6 && hours < 8) {
	  //     $('body').addClass('dawn');
	  //  }
	  //  if (hours >= 18 && hours < 20) {
	  //      $('body').addClass('twilight');
	  //  }
			console.log(hours);
			console.log(date);
			console.log('HRS');
}

// ---- TOGGLE DAY
// ---- TOGGLE DAY
// ---- TOGGLE DAY
//retrieve current state
console.log(window.localStorage.daytoggle);
if (window.localStorage.daytoggle != "undefined" ) {
$('body').removeClass('day').removeClass('night');
$('body').addClass(window.localStorage.daytoggle);
}
else {
	applyTime();

}
/* Toggle */
$('[data-toggle-day]').on('click',function(){
	//console.log('corez');
   if (window.localStorage.daytoggle != "day" ) {
		 $('body').toggleClass("day", true );
		 $('body').toggleClass("night", false );
      window.localStorage.daytoggle = "day";
   } else {
		 $('body').toggleClass("day", false );
		 $('body').toggleClass("night", true );
      window.localStorage.daytoggle = "night";
   }
});

// ---------------------------------------- CLEAR LOCAL STORAGE
// ---------------------------------------- CLEAR LOCAL STORAGE
// ---------------------------------------- CLEAR LOCAL STORAGE
$('[data-clear-storage]').on('click',function(){
localStorage.clear();
applyTime();
console.log('CLEARZZZ');
});





// ---- SHOW TIME
// ---- SHOW TIME
// ---- SHOW TIME
function showTime(){
var date = new Date();
var h = date.getHours(); // 0 - 23
var m = date.getMinutes(); // 0 - 59
var s = date.getSeconds(); // 0 - 59
var session = "AM";
if(h == 0){
		h = 12;
}
if(h > 12){
		h = h - 12;
		session = "PM";
}
h = (h < 10) ? "0" + h : h;
m = (m < 10) ? "0" + m : m;
s = (s < 10) ? "0" + s : s;
var time = h + ":" + m + ":" + s + " " + session;
document.getElementById("MyClockDisplay").innerText = time;
document.getElementById("MyClockDisplay").textContent = time;
setTimeout(showTime, 1000);
}
function refreshData()
{
x = 5;  // 5 Seconds
  console.log('xxxxxxx');
// Do your thing here
setTimeout(refreshData, x*100);
}
refreshData(); // execute function
showTime();


var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();

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

