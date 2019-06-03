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

//create Attribute
var attribute = document.createAttribute("id");
attribute.value = "att";
createElement.setAttributeNode(attribute);
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
