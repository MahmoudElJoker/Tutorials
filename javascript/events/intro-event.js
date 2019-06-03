/*
events
like onclick, onmouseover, onmouseout event in html
we can use single event or multiple events
in html&JS.

*event handler*
creating code (JS function) and it get executed when an event
accord.

there 2 types of events
1- onload events
2- events like click on a mouse , move a mouse
preform key stroke etc..

there 2 steps must be done every time creating an event
1- choose the element where will place our event
(elements like button,input etc..).
2- choose the event we wanna use , mean type of event
(like onclick , mouseover etc..).

when the event happens the code/function
get executed , otherwise event wait until be
executed.
*/

//onmouseover event is very important event
//cuz it get executed just when a mouse been
//over a particular element.
function ChangeColor(){
var Paragrah = document.getElementById("MouseOver").style.color = "red";
}

//onmouseout event is very important event
//cuz it get executed just when a mouse
//go off of a particular element.
function Reset(){
var Paragrah = document.getElementById("MouseOver").style.color = "";
}

//onmouseout and onmouseover events with images
//..............................................
function ChangeToCL(){
var img = document.getElementById("image").src = "midoCl.jpg";
}

function ChangeToBW(){
var img = document.getElementById("image").src = "midoBW.jpg";
}