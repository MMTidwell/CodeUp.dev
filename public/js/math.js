// modify your math.js file to do the following: 
// 1. on page load ask the user what they would like to do: 
//    (add, subtract, divide, multiply)
//    based on the user's response, get numbers from the user to pass into your math functions
//    ensure the user's inputs are valid!
// --------------------------------------------------------------------------------
// 2. write a function averageOfThree that takes 3 numbers and returns their average
//    add functionality to allow the user to square a number, or average 3 numbers
//    (note that now you will not always have just 2 inputs!)
// 1 Comment

"use strict";

// (function() {
// find out what they want to do - add, subtract, divide, multiply 
// ask for numbers to plug in 
// plug in numbers
// make sure that they are numbers
// run new function


// Find the sum of 2 numbers
function sum(a, b) {
	return a + b;
}
// Subtract 2 numbers
function subtract(a, b) {
	return a - b;
}
// Multiply 2 numbers
function multi(a, b) {
	return a * b;
}
// Divide two numbers
function divide(a, b) {
	if (a == 0 || b == 0) {
	alert("You are dividing by 0!");
	} else {
		return a / b;
	}
}
// Square a number without using *
function square(a) {
	return Math.pow(a, 2);
}
// Sum 2 squares without using * or + 
function sumTwoSquares(a, b) {
	return sum(square(a), square(b));
}
// Returns a boolean 
function isNumeric(a, b) {
	if (isNaN(a) || isNaN(b)) {
		return "inputs must be numeric";
	} else {
		return a + b;
	}
}



console.log("This is the sum: " + sum(2, 2));
console.log("This is the subtraction: " + subtract(12, 10));
console.log("This is multiplied: " + multi(2, 5));
console.log("This is divided: " + divide(90, 3));
// console.log("This is divided by 0: " + divide(3, 0))
console.log("This is squared: " + square(4));
console.log("This is the sum of two squares: " + sumTwoSquares(2, 3));
console.log("This is isNumeric: " + isNumeric(6, "tim"));
console.log("This is isNumeric: " + isNumeric(6, 6));

// })();