"use strict";

(function() {
// repeats number by number of times
for (var i = 1; i <= 9; i += 1) {
	
	for (var j = 1; j <= 9; j += 1) {
		j = i.toString();
		console.log(j.repeat(i));
	}	
}
var lastLine = 0
lastLine = lastLine.toString();
console.log(lastLine.repeat(10));

console.log("\n");


// random number * i value results in 
var randomNumber = Math.floor((Math.random() * 10) + 1);

for (var i = 1; i <= 10; i += 1) {
	var total = randomNumber * i;
	console.log(randomNumber + "x" + i + "=" + total);
}

console.log("\n");


// is a number odd or even between 20 and 200 @ random
for (var i = 1; i <= 10; i += 1) {
	var randomNumberBetweenTwentyAndTwoHundred = Math.floor((Math.random() * 200) + 20);
	if (randomNumberBetweenTwentyAndTwoHundred % 2 == 0) {
		console.log(randomNumberBetweenTwentyAndTwoHundred + " is even");
	} else {
		console.log(randomNumberBetweenTwentyAndTwoHundred + " is odd");
	}
}

console.log("\n");


for (var i = 100; i <= 5; i -= 5) {
	console.log(i);
}

})();

