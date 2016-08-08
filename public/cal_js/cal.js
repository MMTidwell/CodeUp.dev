// WHERE TO START
// - √ do not type in input boxes 
// - fill in the inputs with buttons 
// - result goes in far left field
// - get js done first 

// ONCE IT IS BASIC
// - add style once it works
// - get creative
// - add decimal
// - add extra math (binary or hex)
// - have only one field for input
// - reverse polish notation (the operators will come before the operand)

// (function(){})();

function sum(a, b) {
	return a + b;
}

function sub(a, b) {
	return a - b;
}

function multi(a, b) {
	return a * b;
}

function divide(a, b) {
	return a / b;
}

// getting numbers ------------------------------------------------------------------
var number = document.getElementsByClassName("numbers");

for(var i = 0; i < number.length; i += 1) {
	number[i].addEventListener('click', handleNumber);
}

// function numberInput() {
// 	var value = this.innerHTML;
// 	left_input.value += value;
// }

// getting operands -----------------------------------------------------------------
var operand = document.getElementsByClassName("operands")

for (var i = 0; i < operand.length; i += 1) {
	operand[i].addEventListener('click', midClick);
}

function midClick() {
	var valueMid = this.innerHTML;
	mid_input.value = valueMid;
}


// getting numbers into correct input -------------------------------------------------
function handleNumber(event) {
	var valueOfButtonClicked = this.innerHTML;
	var operand = document.getElementById("mid_input");
	var display;

	if (operand.value === "") {
		display = document.getElementById("left_input");
	} else {
		display = document.getElementById("right_input");
	}
	display.value += valueOfButtonClicked
}

// getting total---------------------------------------------------------------------
// document.getElementById('equals').addEventListener('click', equals);
// function equals() {
// 	var operator = document.getElementById("operator");
// 	var total;
// 	if(operator.value == '+') {
// 		// clear out the right input
// 		// clear out the operator
// 		// sum the stuff
// 		total = parseFloat(right_input.value) + parseFloat(right_input.value);
// 		leftInput.value = total;
// 		operator.value = "";
// 		right_input.value = "";
// 	} else if (operator == "-") {

// 	}
// }
// clearing screen-------------------------------------------------------------------





