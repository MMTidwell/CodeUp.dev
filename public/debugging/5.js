// ------------------ ORIGINAL --------------------------------
// the 1 button doesn't work
// the 2 button replaces whatever is in the display
// the 5 button breaks everything
// the clear button doesn't do anything

// food for thought: it looks like an awful lot of duplication in our code for
// selecting and adding an event listener to all the buttons

// function clearClicked (e) {
//     display.value = '';
// }

// var display = document.getElementById('display');
// var clear   = document.getElementById('clear');

// var btn1 = document.getElementById('btn-1');
// var btn2 = document.getElementById('btn-2');
// var btn3 = document.getElementById('btn-3');
// var btn4 = document.getElementById('btn-4');
// var btn5 = document.getElementById('btn-5');

// btn1.addEventListener('click', function(e){
//     display.innerText = 1;
// });

// btn2.addEventListener('click', function(e){
//     display.value = 2;
// });

// btn3.addEventListener('click', function(e){
//     display.value += 3;
// });

// btn4.addEventListener('click', function(e){
//     display.value += 4;
// });

// btn5.addEventListener('click', function(e){
//     display += 5;
// });

// clear.addEventListener('click', 'clearClicked');

// ------------------ REVIEW --------------------------------
function clearClicked (e) {
    display.value = '';
}

var display = document.getElementById('display');
var clear   = document.getElementById('clear');

var btn1 = document.getElementById('btn-1');
var btn2 = document.getElementById('btn-2');
var btn3 = document.getElementById('btn-3');
var btn4 = document.getElementById('btn-4');
var btn5 = document.getElementById('btn-5');

btn1.addEventListener('click', function(e){
    display.value += 1;
});

btn2.addEventListener('click', function(e){
    display.value += 2;
});

btn3.addEventListener('click', function(e){
    display.value += 3;
});

btn4.addEventListener('click', function(e){
    display.value += 4;
});

btn5.addEventListener('click', function(e){
    display.value += 5;
});

clear.addEventListener('click', clearClicked);




