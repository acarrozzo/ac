const clickerWood = document.getElementById('clickerWood');
const counterWood = document.getElementById('counterWood');

const clickerStone = document.getElementById('clickerStone');
const counterStone = document.getElementById('counterStone');

const saveStorage = document.getElementById('saveStorage');
const clearStorage = document.getElementById('clearStorage');
const storage = window.localStorage;

let save = {};
// Object to save
function load() {
	if (storage.getItem("save")) {
		save = JSON.parse(storage.getItem("save"));
		console.log("Save found: ", save);
		counterWood.innerHTML = save.wood;
		counterStone.innerHTML = save.stone;
	} else {
		save.wood = 0;
		save.stone = 0;
		console.log("Save not found");
		counterWood.innerHTML = 0;
		counterStone.innerHTML = 0;
	}
}
load();

// Click Event
clickerWood.addEventListener("click", function () {
	save.wood++;
	counterWood.innerHTML = save.wood;
	$(".progress-bar-fill").css({"width":"100%","transition":".5s"});
	setTimeout(function () {
		$(".progress-bar-fill").css({"width":"0%","transition":"none"});
	}, 500);

});
clickerStone.addEventListener("click", function () {
	save.stone++;
	counterStone.innerHTML = save.stone;
});

saveStorage.addEventListener("click", function () {
	storage.setItem("save", JSON.stringify(save));
	console.log("Saved game");
});

clearStorage.addEventListener("click", function () {
	storage.removeItem("save");
	counterWood.innerHTML = 0;
	counterStone.innerHTML = 0;
});
