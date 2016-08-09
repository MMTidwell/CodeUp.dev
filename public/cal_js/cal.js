// WHERE TO START
// - √ do not type in input boxes 
// - √ fill in the inputs with buttons 
// - √ result goes in far left field
// - √ get js done first 

// ONCE IT IS BASIC
// - add style once it works
// - get creative
// - add decimal
// - add extra math (binary or hex)
// - have only one field for input
// - reverse polish notation (the operators will come before the operand)

// HTML
// 	- √ 3 inputs on the screen
// 	- √ put buttons on the screen
// 	- √ thisInput = document.getElementById('leftInput')
// TASKS
// 	- √ buttons, div, anchor tags
// 		- √ div or anchor tags = thisElement.innerText or innterHTML
// 		- √ buttons 
// START W 
// 	- √ console.log every number/button with an event listener
// 	- √ move into writing number values into the left input 
// CONCERN
// 	- √ is the value of 'a' number or string -> use parseFloat()
// 	- √ each time you hit a button or number the input is replaced not appended rather than placed next to
// 	- √ var display = document.getElementById("leftInput")value 
// 	- √ display = display += newValue
// 	- √ as soon as we hit an operator, we need our focus to point to the rightInput
// 	- √ conditions that check if leftInput has something if the operatorInput has something
// 	- undefined, getting NaN, divide by 0



// (function(){})();
// getting numbers ------------------------------------------------------------------
var number = document.getElementsByClassName("numbers");

for(var i = 0; i < number.length; i += 1) {
	number[i].addEventListener('click', handleNumber);
}


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
var equal = document.getElementById("equals").addEventListener('click', math);
var total = 0;

function math() {
	var a = parseFloat(document.getElementById("left_input").value);
	var b = document.getElementById("mid_input").value;
	var c = parseFloat(document.getElementById("right_input").value);
	// var display;
	// total = parseFloat(a) + b + parseFloat(c)
	
	switch (b) {
		case "+":
			total = a + c
			break;
		case "-":
			total = a - c
			break;
		case "/":
			total = a / c
			break;
		case "*":
			total = a * c
			break;
	}
	a = document.getElementById("left_input");
	a.value = total;
	document.getElementById("mid_input").value = ''
	document.getElementById("right_input").value = ''
}


// clearing screen-------------------------------------------------------------------
var clear = document.getElementById("clear").addEventListener('click', clearClicked);

function clearClicked (e) {
    var a = document.getElementById("left_input");
	var b = document.getElementById("mid_input");
	var c = document.getElementById("right_input");

	document.getElementById("left_input").value = ''
	document.getElementById("mid_input").value = ''
	document.getElementById("right_input").value = ''
}

// var display = document.getElementById('display');
// var clear   = document.getElementById('clear');

// clear.addEventListener('click', clearClicked);





