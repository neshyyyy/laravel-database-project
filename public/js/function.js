
function helloworld(message, message2) {
    alert(var3 + ':' + message + message2)
    var3 = 'kitten'
    alert(var3 + ':' + message + message2)
}
/*
var a = 33;
var b = 10;
var c = "Test";
var linebreak = "<br />";

document.write("a + b = ");
result = a + b;
document.write(result);
document.write(linebreak);

document.write("a - b = ");
result = a - b;
document.write(result);
document.write(linebreak);

document.write("a / b = ");
result = a / b;
document.write(result);
document.write(linebreak);

document.write("a % b = ");
result = a % b;
document.write(result);
document.write(linebreak);

document.write("a + c + b = ");
result = a + c + b;
document.write(result);
document.write(linebreak);

a = a++;
document.write("a++ = ");
result = a++;
document.write(result);
document.write(linebreak);

b = b--;
document.write("b-- = ");
result = b--;
document.write(result);
document.write(linebreak);

var age = 15;
if (age >= 17) {
    document.write("<b>Qualifies for driving</b><br>");
} else {
    document.write("<b>Does not qualifies for driving</b><br>");
}

var book = "economics";
if (book == "history") {
    document.write("<b>History Book</b>");
}
else if (book == "maths" || book == "math") {
    document.write("<b>Maths Book</b>");
}
else if (book == "economics") {
    document.write("<b>Economics Book</b>");
}
else {
    document.write("<b>Unknown Book</b>");
}


var grade = prompt("which Grade");
document.write("Entering switch block<br/>"); switch (grade) {
    case 'A': document.write("Good job<br />");
        break;
    case 'B': document.write("Pretty good<br />");
        break;
    case 'C': document.write("Passed<br />");
        break;
    case 'D': document.write("Not so good<br />");
        break;
    case 'F': document.write("Failed<br />");
        break;
    default: document.write("Unknown grade<br />");
}

document.write("Exiting switch block<br/>");


document.write("starting loop" + "<br/>");
for (count = 0; count < 10; count++) {
    document.write("Current Count : " + count);
    document.write("<br/>");
}
document.write("Loop stopped!");


var x = 1;
document.write("Entering the loop<br /> ");
while (x < 20) {
    if (x == 5) {
        break;  // breaks out of loop completely   
    }


    x = x + 1;
    document.write(x + "<br />");
}
document.write("Exiting the loop!<br /> ");

*/


function getConfirmation() {
    alert('Delete')
    var retVal = confirm("Do you want to continue ?");
    if (retVal == true) {
        document.write("User wants to delete?")
    } else {
        document.write("User does not want to delete!");
        return false;
    }
}

function over() {
    alert("Mouse Over");
}
function out() {
    alert("Mouse Out")
}

function myevent(name) {
    alert(name);
}