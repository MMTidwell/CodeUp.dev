"use strict";



// ----------------------- STUDENT GRADES -----------------------
// students grades - 70 80 95

// if You're awesome if avg > 80
// else You need ot practice more

// var studentGradesA = 70
// var studentGradesB = 80
// var studentGradesC = 95

// var studentsAvg = (studentGradesA + studentGradesB + studentGradesC) / 3

// var studentsAvg = (70 + 80 + 95) / 3;

// if (studentsAvg > 80) {
// 	console.log("You're Awesome");
// } else {
// 	console.log("You need to practice more");
// }
function studentsGrades(a, b, c) {
	var sum = (a + b + c);
	var avg = (sum / 3).toFixed(0);	
	return avg;
}


function studentAvg (avg) {
	if (avg > 80) {
		return "You're Awesome"; 
	} else {
		return "You need to practice more";
	}
}

console.log(studentAvg(studentsGrades(2, 70, 90)));


// ----------------------- DISCOUNT GIVEN ABOVE $200 -----------------------
// buy > $200
// if true reduce 35%

// cameron $180
// ryan $250
// george $320

// if amount > 200 
// 	var disc = (amount * .35) 
// 	var finalpayment = (amount - disc)
// 	console.log("Luis bought $100.00, no discount was applied. Final payment: $100.00.
// Zach bought $220.00, discount was applied. Final payment: $143.00.")

// var name = "Cameron";
// var amount = 180;

// if (amount > 200) {
// 	var discount = (amount * .35);
// 	var finalpayment = (amount - discount);
// 	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2));
// } else {
// 	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2));
// }



// name = "Ryan";
// amount = 250;

// if (amount > 200) {
// 	discount = (amount * .35);
// 	finalpayment = (amount - discount);
	
// 	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2))
// } else {
// 	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2));
// }



// name = "George";
// amount = 320;

// if (amount > 200) {
// 	discount = (amount * .35);
// 	finalpayment = (amount - discount);
	
// 	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2));
// } else {
// 	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2));
// }
function showCustySale(person, salesAmount, disc, discCutOff) {
	var finalAmount;

	if (salesAmount > discCutOff) {
		finalAmount = salesAmount - (salesAmount * disc)
		return person + " bought $" + salesAmount.toFixed(2) + ", discount was applied. Final payment: $" + finalAmount.toFixed(2);
	} else {
		return person + " bought $" + salesAmount.toFixed(2) + ", no discount was applied. Final payment: $" + salesAmount.toFixed(2);
	}
}

console.log(showCustySale("Mitt", 180, 0.35, 200));
console.log(showCustySale("Tim", 290, 0.35, 200));
console.log(showCustySale("Brian", 500, 0.35, 200));


// ----------------------- FLIP A COIN -----------------------
// new car or new house
// car = 0
// house = 1
function flipACoin() {
	var flipACoin = Math.floor(Math.random() * 2);
	return flipACoin;
}

function flipThatCoin() {
	if (flipACoin() == 0) {
		return "Buy a car.";
	} else {
		return "Buy a house.";
	}
}
console.log(flipThatCoin())
console.log(flipThatCoin())
console.log(flipThatCoin())











