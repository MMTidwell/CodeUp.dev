// ------------------ ORIGINAL --------------------------------
// we're expecting to see the font color of all the paragraphs turn blue

// var paragraphs = document.getElementsByClassName('.lorem');

// for (var i = 0; i < paragraphs.length; i++) {
//     var p = paragraph[i];
//     p.style.color = 'blue';
// }

// ------------------ MINE --------------------------------
var paragraphs = document.getElementsByClassName('lorem');

for (var i = 0; i < paragraphs.length; i++) {
    var p = paragraphs[i];
    p.style.color = 'blue';
}

// ------------------ REVIEW --------------------------------
// SAME AS MINE