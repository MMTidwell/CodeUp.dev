"use strict"

// students grades - 70 80 95

// if You're awesome if avg > 80
// else You need ot practice more

var studentGradesA = 70
var studentGradesB = 80
var studentGradesC = 95

var studentsAvg = (studentGradesA + studentGradesB + studentGradesC) / 3

if (studentsAvg > 80) {
	console.log("You're Awesome")
} else {
	console.log("You need to practice more")
}


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
var name = "Cameron"
var amount = 180

if (amount > 200) {
	var discount = (amount * .35)
	var finalpayment = (amount - discount)
	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2))
} else {
	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2))
}



var name = "Ryan"
var amount = 250

if (amount > 200) {
	var discount = (amount * .35)
	var finalpayment = (amount - discount)
	
	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2))
} else {
	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2))
}



var name = "George"
var amount = 320

if (amount > 200) {
	var discount = (amount * .35)
	var finalpayment = (amount - discount)
	
	console.log(name + " bought $" + amount.toFixed(2) + ", discount was applied. Final payment: $" + finalpayment.toFixed(2))
} else {
	console.log(name + " bought $" + amount.toFixed(2) + ", no discount was applied. Final payment: $" + amount.toFixed(2))
}




// new car or new house
// car = 0
// house = 1

var flipACoin = Math.floor(Math.random()* 2)

if (flipACoin == 0) {
	console.log("Buy a car.");
} else {
	console.log("Buy a house.");
}













