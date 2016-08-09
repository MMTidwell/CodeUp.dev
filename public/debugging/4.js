// ------------------ ORIGINAL --------------------------------
// expect to see an alert

// var myButton = document.getElementById('my-btn');

// myButton.addEventListener('click', alertMe);

// var alertMe = function () {
//     alert('hey! you clicked a thing');
// }


// ------------------ MINE --------------------------------
// var myButton = document.getElementById('my-btn');

// myButton.addEventListener('click', alertMe);

// function alertMe() {
//     alert('hey! you clicked a thing');
// }

// ------------------ REVIEW --------------------------------
var alertMe = function () {
    alert('hey! you clicked a thing');
}

var myButton = document.getElementById('my-btn');

myButton.addEventListener('click', alertMe);

