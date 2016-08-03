"use strict";

(function() {
	var myNameIs = 'Mitt'; // TODO: Fill in your name here.

	// TODO:
	// Create a function called 'sayHello' that takes a parameter 'name'.
	// When called, the function should log a message that says hello from the passed in name.
	function sayHello(name) {
		console.log("Hello " + name);
	}

	// function sayHello(name) {
	// 	var result = 'hello ' + name;
	// 	return result
	// }

	// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
	sayHello(myNameIs);

	// console.log(sayHello(myNameIs));




	// Don't modify the following line
	// It generates a random number between 1 and 100 and stores it in random
	var random = Math.floor((Math.random()*100)+1);

	// TODO:
	// Create a function called 'isOdd' that takes a number as a parameter.
	// The function should use the ternary operator to log a message.
	// The log should tell the number passed in and whether it is odd or not.
	function isOdd(number) {
		var newNum = (number % 2 == 0) ? ("The number: " + number + " is even!") : ("The number: " + number + " is odd!");
		// alert(newNum);
		console.log(newNum)
	}
	// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
	isOdd(random);




	// taks a needle and a haystack
	// returns true if the needle is inthe haystack, otherwise false
	function stringContains (haystack, needle) {
		var index = haystack.indexOf(needle);
		if (index === -1) {
			return false;
		} else {
			return true;
		}ƒ
	}

	// takes a stirng as input
	// return true if there is a space in the string and false if there is not
	function hasASpace (stringToCheck) {
		var stringHasASpace = stringContains(stringToCheck, ' ');
		return stringHasASpace;
	}

	// take a string and remove the spaces
	// input => hello there lassen
	// output => hellotherelassen
	function removeSpaces (phrase) {
		while (hasASpace(phrase, ' ')) {
			phrase = phrase.replace(' ', '');
		}
		return phrase;
	}

	var result = removeSpaces("Hello Mitters");
	// console.log(result);

})();
