"use strict";

// $(document).ready(function(){}); checks to see if the DOM is ready
$(document).ready(function() {

	// // alerts the contents of id num3 when the page is loaded
	// var contents = $('#num3').html();
	// alert(contents);

	// // alerts the contents of class lorem when the page is loaded (this will run after the first content var)
	// var secondContent = $('.lorem1').html();
	// alert(secondContent);

	// // changes the background color to yellow after the first 2 alerts
	// $(".lorem2").css('background-color', '#FF0');

	// // gives border to class lorem1
	// $(".lorem1").css('border', '1px solid black');

	// // changes font size for li element
	// $("li").css("font-size", "20px");

	// // mulit selectors, changing the background to yellow
	// $("h1, p, li").css("background-color", "#FF0");

	// * collects everything in the HTML file and sets a red border around it
	$("*").css("border", "1px solid #F00");
});
