"use strict";

(function() {
// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

function theirName() {
	do {
		var name = prompt("What is your name?")
	} while (name === '');
	return name;
}

// TODO: Show an alert message that welcomes the user based on their input.
function welcome(name) {
	alert("Welcome " + name);
}
var result = theirName();
console.log(welcome(result));

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
function pizza() {
	if (confirm("Do you like pizza?")) {
		alert("That is so not my favorite food anymore!");
	} else {
		alert("Thats cool, me neither.");
	}
}
console.log(pizza());

})();