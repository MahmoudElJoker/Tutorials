/*
##elements##
elements are a very important topic in javascript,
and what make it important the fact that I can create html tags
by javascript , may I wanna create an html tag I don't wanna it appear
before make a specific action..
for example :-
by this I can create page numbers for content so it will make the page looks pretty good
also it will make the page match faster..
there many ways that can be used to make it , but it one good way.
also elements have another uses like if I wanna hide some content
so it will be useful as will.
------------------------------------
1- create element
creating element done by createElement(); function in JS
for example if I wanna create a paragraph tag/element
I will write something like that :-
document.createElement("p");
then need to select the parent tag that I wanna
use to create that element inside.
for example :-
document.getElementById("id_name");
then finally I need to use
appendChild() function like that
var_name.appendChild(var_name_for_element);

2- remove element
to remove an element need first to use
getElementByTagName() function with position node of that element
like that getElementByTagName("p")[1];
then use the parent node to access that element
like that var_name.parentNode;
then just using var_name.removeChild(var_name_for_element);

3- create text
and it can be easily done by createTextNode() function
like that
document.createTextNode("some text");
*/

//hierarchy in html very important
//so everything about child element
//and parent element
//so the main tag is the parent
//and the tag that inside that main tag
//is a child and as known child can have all property of parent
//but parent can not have the child property.
function addElement(){
//create header
var createElement = document.createElement("h2");
var selectDiv = document.getElementById("mido");
selectDiv.appendChild(createElement);
var some_text = document.createTextNode("EVENTS");
createElement.appendChild(some_text);

//create paragraph
createElement = document.createElement("p");
selectDiv.appendChild(createElement);
var text = "JavaScript's interaction with HTML is handled through events that occur when the user or the browser manipulates a page. When the page loads, it is called an event. When the user clicks a button, that click too is an event. Other examples include events like pressing any key, closing a window, resizing a window, etc.";
some_text = document.createTextNode(text);
createElement.appendChild(some_text);
}

function removeElement(){
var tagName = ["h2","p"];
for(var i = 0; i<2; i++){
   // get the element by tag name
var element = document.getElementsByTagName(tagName[i])[2];
  // get the element parent node
var parent = element.parentNode;
 // remove the child
parent.removeChild(element);
 }

}
