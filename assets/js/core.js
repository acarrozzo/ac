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
//  console.log('xxxxxxx');
// Do your thing here
setTimeout(refreshData, x*100);
}
refreshData(); // execute function
showTime();


var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
