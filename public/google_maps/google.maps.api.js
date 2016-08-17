(function(){ 
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
	}

	// SHOWS MAP-------------------------------------------------------------------
	var map = new google.maps.Map(document.getElementById("map_area"), firstMap);

	// ADDING EVENT LISTENERS TO BUTTONS-------------------------------------------
	document.getElementById("thai").addEventListener('click', function() {
		// setting object to hold the zoom value
		var mapOptions = {
			zoom: 15
		} 
		var address = "5999 De Zavala Rd, San Antonio, TX 78249";
		var info = "Thai Bistro"
		renderMap(address, info);
	}); 

	document.getElementById("sushi").addEventListener('click', function() {
		var mapOptions = {
			zoom: 15
		}
		var address = "9921 Interstate 10 Frontage Rd, San Antonio, TX 78230";
		var info = "Wasabi"
		renderMap(address, info);
	});

	document.getElementById("chinese").addEventListener('click', function() {
		var mapOptions = {
			zoom: 15
		}
		var address = "3505 Wurzbach Rd #102, San Antonio, TX 78238";
		var info = "Sichuan House"	
		renderMap(address, info);
	});

	document.getElementById("indian").addEventListener('click', function() {
		var mapOptions = {
			zoom: 15
		}
		var address = "4987 NW Loop 410, San Antonio, TX 78229";
		var info = "Spice"
		renderMap(address, info);
	});

	// GEOCODING-------------------------------------------------------------------
	function renderMap(address, info) {
		// sets init geocoder object
		var geocoder = new google.maps.Geocoder();

		// geocode the address that is passed in from button when clicked
		geocoder.geocode({"address": address}, function(results, status) {
			// resets the map zoom for each time a button is clicked
			map.setZoom(15);
			if (status == google.maps.GeocoderStatus.OK) {
				// recenters the map over the new address
				map.setCenter(results[0].geometry.location);

				// adds marker to map
				var marker = new google.maps.Marker ({
					position: results[0].geometry.location,
					map: map
				})
				
				// adds info window to map
				var infowindow = new google.maps.InfoWindow ({
					content: info
				})

				// adds both the marker and info window at same time
				infowindow.open(map, marker);

			} else {
				alert("Geocoding was not successful - STATUS: " + status);
			}
		})	
	}
})();









