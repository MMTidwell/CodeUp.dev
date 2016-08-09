// ------------------ ORIGINAL --------------------------------
// we're expecting to see an alert when we click the button

// document.getElementById('my-btn').addEventListener(function(e){
//     alert('you clicked the button!');
// });

// ------------------ MINE --------------------------------
// var button = document.getElementById('my-btn').addEventListener('click', clicked);

// function clicked() {
//     alert("you clicked the button!");
// }

// ------------------ REVIEW --------------------------------
var button = document.getElementById('my-btn').addEventListener('click', function(e){
    alert('you clicked the button!');
});



