"use strict";

(function() {
// 0 = 0%
// 1 = 10%
// 2 = 25%
// 3 = 35%
// 4 = 50%
// 5 = FREE


// BEST PRACTICE IS TO -- 
// 	- HAVE CONSOLE.LOG("") AT THE BOTTOM 
// 	- NO NUMBERS HARD CODED INTO THE PROGRAM


var amount = 100;
var luckyNumber = Math.floor(Math.random()* 6);

switch (luckyNumber) {
	case 0:
		console.log("You got a 0, your total is $" + amount);
		break;
	case 1:
		var disc = amount - (amount * .10)
		console.log("You got a 1, your total is $" + disc);
		break;
	case 2:
		disc = amount - (amount * .25)
		console.log("You got a 2, your total is $" + disc);
		break;
	case 3:
		disc = amount - (amount * .35)
		console.log("You got a 3, your total is $" + disc);
		break;
	case 4:
		disc = amount - (amount * .5)
		console.log("You got a 4, your total is $" + disc);
		break;
	case 5:
		disc = amount - (amount * .10)
		console.log("Lucky you, you got a 5. Everything is FREE!!!!!");
		break;
	// default:
	// 	console.log(""):
}


var month = Math.ceil(Math.random()* 12);

switch (month) {
	case 1:
		console.log("January");
		break;
	case 2:
		console.log("February");
		break;
	case 3:
		console.log("March");
		break;
	case 4:
		console.log("April");
		break;
	case 5:
		console.log("May");
		break;
	case 6:
		console.log("June");
		break;
	case 7:
		console.log("July");
		break;
	case 8:
		console.log("August");
		break;
	case 9:
		console.log("September");
		break;
	case 10:
		console.log("October");
		break;
	case 11:
		console.log("November");
		break;
	case 12:
		console.log("December");
		break;
}

})();