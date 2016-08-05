"use strict";

var navbarLinkElements = document.getElementsByTagName('a');
// console.log(navbarLinkedElement);

var delay = 2000;

var timeoutId = setTimeout(function () {
	for (var i = 0; i < navbarLinkElements.length; i++) {
		console.log(navbarLinkElements[i]);
		navbarLinkElements[i].style.color = "red";
		// navbarLinkElements[i].style.fontFamily = "fantasy";
		navbarLinkElements[i].style["font-family"] = "fantasy";
		var link = "http://mylittlepony.com";
		// navbarLinkElements[i].setAttribute("href", link);
		// console.log(navbarLinkElements[i].getAttribute("href"));
		// navbarLinkElements[i].removeAttribute("href", link)
		navbarLinkElements[i].hasAttribute("style")



	}
	// navbarLinkElements.forEach(function(element) {
	// 	console.log(element);
	// });


	// navbarElement.innerHtml = "";
	
}, delay);


// navbarElement.innerHtml = "";