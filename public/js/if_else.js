
"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list

if      (color == "red") {
    console.log('the color is red');
} 
else if (color == 'orange') {
    console.log('the color is orange');
}
else if (color == 'yellow') {
    console.log('the color is yellow');
}
else if (color == 'green') {
    console.log('the color is green');
}
else if (color == 'blue') {
    console.log('the color is blue');
} else {
    console.log("I do not know anything by that color");
}



console.log(favorite === color ? "My favorite color is indigo" : "violet is not my favorite color"); 


// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
