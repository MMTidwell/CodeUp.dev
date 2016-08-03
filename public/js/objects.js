(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    var person = {
    	"firstName": "Mittsy",
    	"lastName": "Tidwell",
    	"sayHello": function() {
    		alert("Hello " + this.firstName + this.lastName);
    	}
    };
    console.log(person.sayHello())
    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();
