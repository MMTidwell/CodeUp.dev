'use strict';

function addTopiing() {
	var newTopping = "";

	newTopping += '<li>';
	newTopping += this.innerText;
	newTopping += '</li>';

	selectedToppings.innerHTML += newTopping;

	this.innerText += ' selected!';;
	this.style.backgroundColor = 'yellow';
}


var toppings 			= document.getElementByClassName("topping");
var selectedToppings 	= document.getElementById("selected-toppings");
var topping;

for(var i = 0; i < toppings.length; i += 1) {
	topping = toppings[i];
	topping.addEventListener("click", addTopiing);
}