(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split('|')
    console.log(planetsArray);


    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    function placeingBrakes(list) {
        list = list.split('|');

        for (var i = 0; i < list.length; i += 1) {
            i += list[i] + "<br>"
        } 
        return list.join('<br>')       
    }
    console.log(placeingBrakes(planetsString));


    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
    var secondString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    function unorderedList(list) {
        list = list.split('|');
        var html = '<ul>' + '\n';

        for (var i = 0; i < list.length; i += 1) {
            html += '   ' + '<li>' + list[i] + '</li>' + '\n';
        }
        return html += '</ul>';
    }
    console.log(unorderedList(secondString));

})();
