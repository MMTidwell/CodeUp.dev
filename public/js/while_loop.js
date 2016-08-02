"use strict";

(function() {
// starting random 50 - 100
// client random 1 - 5
// total cones sold
// cones left = cones sold - cones left 

var allCones = Math.floor(Math.random() * 50) + 50; 

do {
	var conesNeeded = Math.floor(Math.random() * 5) + 1;
	if (allCones >= conesNeeded) {
		console.log(conesNeeded + " cones sold.");
		allCones -= conesNeeded;
	} else if (allCones < conesNeeded) {
		console.log("Cannot sell you " + conesNeeded + " cones, I only have " + allCones);
	} else {
		console.log("Ya! I sold them all!"); 
	}
} while (allCones > 0);



var i = 2;

while (i <= 65536) {
	console.log(i);
	i = i * 2;
}

})();