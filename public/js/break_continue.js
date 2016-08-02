"use strict";

(function(){
var randomNumber = Math.floor(Math.random() * 25) * 2 + 1 ;
console.log(randomNumber);


for (var i = 1; i < 50; i += 1) {
	if (randomNumber == i) {
		console.log("Yikes! Skipping number: " + i);
		continue;
	}
	if (i % 2 != 0) {
		console.log("here is a odd number: " + i);
	}
}
})();