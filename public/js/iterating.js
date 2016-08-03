(function(){
    "use strict";

	    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
	var names = ["michelle", "tony", "alice", "frank"]
	var newNames = ["mitt", "tim", "brian"]
	    // TODO: Create a log statement that will log the number of elements in the names array.
	console.log(names.length)
	console.log('\n')
	    // TODO: Create log statements that will print each of the names array elements individually.
	function allNames() {
		for (var i = 0; i < names.length; i += 1) {
			console.log(names[i])
		}
	}
	allNames()
	console.log('\n')

	// var namesReverse = newNames.reverse()
	// function namesInReverse() {
	// 	for (var i = 0; i < newNames.length; i += 1) {
	// 		console.log(newNames[i])
	// 	}
	// }
	// namesInReverse()
	function namesInReverse() {
		for (var i = newNames.length -1; i >= 0; i -= 1) {
			console.log(newNames[i]);
		}
	}
	namesInReverse()
	console.log('\n')

	names.forEach(function (element, index, array) {
		console.log(element);
	});

})();
