(function(){
    "use strict";

    // TODO: Create an array holding the names of the eight planets in our solar system in order, starting closest to the sun.
    var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];

    // function for logging the planets array
    function logPlanets() {
        console.log("Here is the list of planets:");
        // planets.forEach(function (element, index, array) {
        // 	console.log(element)
        // });
	    console.log(planets);
        console.log("---- ---- ---- ----");
        console.log('\n')
    }

    logPlanets();


    console.log('Adding "The Sun" to the beginning of the planets array.');
    planets.unshift("Sun");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    logPlanets();

    console.log('Adding "Pluto" to the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.push("Pluto")
    logPlanets();

    console.log('Removing "The Sun" from the beginning of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.shift()
    logPlanets();

    console.log('Removing "Pluto" from the end of the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.pop()
    logPlanets();

    console.log('Finding and logging the index of "Earth" in the planets array.');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    var earth = planets.indexOf("Earth");
    console.log(earth)
    console.log('\n')


    console.log('Using splice to remove the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.splice(3, 1)
    logPlanets();

    console.log('Using splice to add back the planet after "Earth".');
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.splice(3, 0, "Mars")
    logPlanets();

    console.log("Reversing the order of the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.reverse()
    logPlanets();

    console.log("Sorting the planets array.");
    // TODO: Read the console.log() statement above. Write code to perform the step it describes.
    planets.sort()
    logPlanets();

    //write a function that takes an array and returns a random element from that array
    function sampleRandom() {
        var randomlyPicksOne = planets[Math.floor(Math.random() * planets.length)];
        return randomlyPicksOne;
    }
    console.log(sampleRandom())

    var sampleArray = [1, 2, 3, 4]
    function sample() {
        var radomPickOne = sampleArray[Math.floor(Math.random() * sampleArray.length)];
        return radomPickOne;
    }
    console.log(sample())

    // sum the digits in a number
    // turn number into a string
    // turn string into array
    // loop through that array and add together 
    
    function sumTheDigits(number) {
        number = number.toString();
        var numberArray = number.split('');
        var sum = 0;
        
        numberArray.forEach(function(number){
            sum += parseInt(number);
        });
        return sum;
    }
    console.log(sumTheDigits(394857349587));

})();









