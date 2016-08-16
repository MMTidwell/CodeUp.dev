"use strict";

// (function(){ 
// =======================JS======================================
	// =================Current Weather===========================
	// my api for openweathermap.org
	const myAPIKey = "ffef12efaed7d08d451bf3c9384cff70";

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
		if (inRange(348.75, 11.25, deg)){
			return "N"
		} if (inRange(33.75, 56.25, deg)){
			return "NE"
		} if (inRange(78.75, 101.25, deg)){
			return "E"
		} if (inRange(123.75, 146.25, deg)){
			return "SE"
		} if (inRange(168.75, 191.25, deg)){
			return "S"
		} if (inRange(213.75, 236.25, deg)){
			return "SW"
		} if (inRange(258.75, 281.25, deg)){
			return "W"
		} if (inRange(303.75, 326.25, deg)){
			return "NW"
		}
	}

	// gathers info from openweathermap.org and places it in HTML
	function weatherInfo(weatherData){
		//	name =	get().location in object.var called
		var icon = weatherData.weather[0].icon;
		var temp = Math.round(weatherData.main.temp_min) + "ºF / " + Math.round(weatherData.main.temp_max) + "ºF";
		var description = weatherData.weather[0].description;
		var humidity = weatherData.main.humidity + "%";
		var windDir = windDirection(weatherData.wind.deg);
		var wind = weatherData.wind.speed + " MPH";
		var pressure = Math.round(weatherData.main.pressure * 0.02952998751) + " IN";

		// assigns info to area in HTML
		$("#icon").attr("src", ("http://openweathermap.org/img/w/" + icon + ".png"));
		$("#temp-min").text(temp);
		$("#description").text(description);
		$("#humidity").text(humidity);
		$("#wind").text(wind + " " + windDir);
		$("#pressure").text(pressure);
	}


// =======================JQUERY===================================


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



// })();

