// TOP 4 FAV RESTAURANTS!
// 	- Thai Bistro 5999 De Zavala Rd, San Antonio, TX 78249   29.563385,-98.600993
// 	- Wasabi 9921 Interstate 10 Frontage Rd, San Antonio, TX 78230   29.5339343,-98.5656509
// 	- Sichuan House 3505 Wurzbach Rd #102, San Antonio, TX 78238   29.4716456,-98.6236383
// 	- Spice Fine Indian Cuisine 4987 NW Loop 410, San Antonio, TX 78229   29.4882958,-98.5854764

// FOCUS POINT (Courthouse Bexar County)
// - 29.4464355,-98.6425196
// (function(){ })()};
"use strict";

// TELLS MAP WHERE TO FOCUS, CENTER, AND ZOOM---------------------------------
var firstMap = {
	// zoom: 5, // shows the lower 1/2 of US
	// zoom: 15,  // shows most of downtown
	// zoom: 20,  // shows close up of street and building
	zoom: 11,

	center: {
		lat: 29.4213001,
		lng: -98.499774
	},
	mapTypeId: google.maps.MapTypeId.ROADMAP
};

// SHOWS MAP-------------------------------------------------------------------
var map = new google.maps.Map(document.getElementById("map_area"), firstMap);

// ADDING EVENT LISTENERS TO BUTTONS-------------------------------------------
document.getElementById("thai").addEventListener('click', function() {
	var mapOptions = {
		zoom: 20
	} 
	var address = "5999 De Zavala Rd, San Antonio, TX 78249";
	var info = "Thai Bistro"
	renderMap(address, mapOptions, info);
}); 

document.getElementById("sushi").addEventListener('click', function() {
	var mapOptions = {
		zoom: 20
	}
	var address = "9921 Interstate 10 Frontage Rd, San Antonio, TX 78230";
	var info = "Wasabi"
	renderMap(address, mapOptions, info);
});

document.getElementById("chinese").addEventListener('click', function() {
	var mapOptions = {
		zoom: 20
	}
	var address = "3505 Wurzbach Rd #102, San Antonio, TX 78238";
	var info = "Sichuan House"
	renderMap(address, mapOptions, info);
});

document.getElementById("indian").addEventListener('click', function() {
	var mapOptions = {
		zoom: 20
	}
	var address = "4987 NW Loop 410, San Antonio, TX 78229";
	var info = "Spice"
	renderMap(address, mapOptions, info);
});

// GEOCODING-------------------------------------------------------------------

function renderMap(address, mapOptions, info) {
	var geocoder = new google.maps.Geocoder();

	geocoder.geocode({"address": address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);

			var marker = new google.maps.Marker ({
				position: results[0].geometry.location,
				map: map
			})
			
			var infowindow = new google.maps.InfoWindow ({
				content: info
			})

			infowindow.open(map, marker);

		} else {
			alert("Geocoding was not successful - STATUS: " + status);
		}
	})

	

	
}



















