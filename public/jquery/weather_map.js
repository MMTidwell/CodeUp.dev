"use strict";

$(document).ready(function(){ 
// =======================JS======================================
	// =================Current Weather===========================
	// my api for openweathermap.org
	const myAPIKey = "ffef12efaed7d08d451bf3c9384cff70";

	var days = 6;

	// checks the value and return boolean for windDirection(deg)
	function inRange(min, max, value){
		if (value >= min && value <= max){
			return true
		} else {
			return false
		}
	}

	// takes wind degree and change it to direction
	function windDirection(deg){
		if (inRange(348.75, 33.75, deg)){
			return "N"
		} if (inRange(33.75, 78.75, deg)){
			return "NE"
		} if (inRange(78.75, 123.75, deg)){
			return "E"
		} if (inRange(123.75, 168.75, deg)){
			return "SE"
		} if (inRange(168.75, 213.75, deg)){
			return "S"
		} if (inRange(213.75, 258.75, deg)){
			return "SW"
		} if (inRange(258.75, 303.75, deg)){
			return "W"
		} if (inRange(303.75, 326.25, deg)){
			return "NW"
		}
	}

	// gathers info from openweathermap.org and places it in HTML
	function weatherInfo(weatherData){
		//	name =	get().location in object.var called
		var city = weatherData.name;
		// date
		var dt = weatherData.dt;
		var day = new Date(dt * 1000);
		var date = day.toDateString();
		// icon
		var icon = weatherData.weather[0].icon;
		// temp 
		var currentTemp = Math.round(weatherData.main.temp) + "º F";
		var temp = Math.round(weatherData.main.temp_min) + "º F / " + Math.round(weatherData.main.temp_max) + "º F";
		// all other
		var description = weatherData.weather[0].description;
		var humidity = weatherData.main.humidity + "%";
		var windDir = windDirection(weatherData.wind.deg);
		var wind = weatherData.wind.speed + " mph";
		var pressure = Math.round(weatherData.main.pressure * 0.02952998751) + " IN";

		// assigns info to area in HTML
		$("#cityName").text(city);
		$("#date").text(date)
		$("#icon").attr("src", ("http://openweathermap.org/img/w/" + icon + ".png"));
		$("#temp").text(currentTemp);
		$("#daily-temp").text(temp);
		$("#description").text(description);
		$("#humidity").text(humidity);
		$("#wind").text(wind + " " + windDir);
		$("#pressure").text(pressure);
	}


	// =================Current Map==========================
	// builds map
	function initMap(){
		// center of USA
		var latLng = {
			lat: 37,
			lng: -95
		};
		// places map, sets zoom and centers
		var map = new google.maps.Map(document.getElementById("map_area"), {
			zoom: 4,
			center: latLng
		});
		// sets marker on map
		var marker = new google.maps.Marker({
			position: latLng,
			map: map,

			draggable: true,
			animation: google.maps.Animation.DROP
		});
		marker.addListener('click', toggleBounce);
	}

	function toggleBounce(){
		if (marker.getAnimation() !== null) {
			marker.setAnimation(null);
		} else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		}
	}

	var map = new google.maps.Map(document.getElementById("map_area"), initMap());
	



// =======================AJAX=====================================
	// gets data object from openweathermap.org and sends it to weatherInfo function
	$.get("http://api.openweathermap.org/data/2.5/weather", {
		APPID: myAPIKey,
		q: "San Antonio, TX",
		// sets the temp to F
		units: "imperial" 
	}).done(function(weatherData){
		weatherInfo(weatherData)
		console.log(weatherData)
	}).fail(function(){
		alert("Error loading weather")
	});

	// =================Forecast Weather===========================
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: myAPIKey,
		q: "San Antonio, TX",
		// sets the temp to F
		units: "imperial",
		cnt: days
		}).done(function(weatherData){
			// console.log(weatherData);
			weatherData.list.slice(1).forEach(function(days, index){
				var div = "<div id='rows'>";
				var dt = days.dt;
				var day = new Date(dt * 1000);
				var date = day.toDateString();

				var icon = days.weather[0].icon;
				var temp = Math.round(days.temp.min) + "ºF / " + Math.round(days.temp.max) + "ºF";

				div += "<div>"
				div += "<div>" + date + "</div>";
				div += "<img src='http://openweathermap.org/img/w/" + icon + ".png'>";
				div += "<div>" + temp + "</div>";
				div += "</div>"

				$("#next_day").append(div);
			});
			
		}).fail(function(){
			alert("Error loading weather")
		});
	});


// });

