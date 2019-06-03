/*
DOM / Document object model.
Definition & explanation :-
DOM stands for Document Object Model. It’s an API (application programming interface)
for working with structured documents such as those written in XML, XHTML,
and HTML. DOM is a language-independent API that also exists in PHP. In JavaScript,
this API is easily spotted: anything that starts with document. has to do with the DOM.
As a point of historical interest, DOM started in JavaScript and was later standardized
by the World Wide Web Consortium (W3C) as an API independent of JavaScript or
any other language. These days, you can still unearth remnants of that primordial DOM
(now called DOM0)—things like document.images (all images on a page) and docu-
ment.links (all links), which were replaced in DOM version 1 with more generic
methods such as document.getElementById() and document.getElementsByTagName().
JavaScript = DOM + BOM + ECMA
-------------------------------------------------
DOM also creating objects that we can use that
represents the HTML. Objects are stored in the DOM.
The DOM allows us to use our JavaScript to access parts
of the web page.
--------------------------------------
How it work ?
it's pretty simple , the browser loads the web page
then creates the DOM, mean the DOM is another language.
also we can describe the DOM as a bunch of objects that created from
original Document , and in my case here the Document is HTML ,
so every single tag in html page is an object in the DOM.
the relation between these objects can be described by something called the model,
So that's the reason why it called Document Object Model.
-------------------------------------------------
why do I need the DOM ?
cuz HTML is a markup language and JavaScript is a scripting language/programming language
so that the reason why I do need the DOM, cuz JavaScript uses object then the DOM 
so creates objects for us,just convert these tags to objects in JavaScript ,
then we'll be able to work with html tags in JavaScript, and the Model purpose is to 
describe the relation between the objects/tags.
--------------------------------------------------
very simple and very powerful feature in JavaScript
it make front-end development much easier.
*/

//the DOM has a concept of nodes
//and there about 12 types of nodes
//but there only 3 types are commonly used
//1- element node.
//2- attribute node
//3- text node.
//for ex:-
//<div> is the element node.
//id = "mido" / class="mido" is the attribute node
//and the text between <div> text here </div> is the text node.

//an example of getElementById() function
function DoSomthing(){
//the parameter in getElementById() is the id in html code and in my html the id was domtest1
//second part is style object and there some difference in styling between javascript and css
//for ex :-
// JS                      CSS
//color                   color
//border                  border
//margin                  margin
//padding-left            padding-left  
//border-left             border-left
//----difference----
//backgroundColor         background-Color
//fontStyle               font-style
//textDecoration          text-decoration

//use style then the property for ex- color
//and we use property like css except using equal sign instead of colon.
var text = document.getElementById("domtest1").style.color = "red";
var text = document.getElementById("domtest1").style.backgroundColor = "purple";
var text = document.getElementById("domtest1").style.fontStyle = "italic";

}

//getElementsByTagName() this method can grab all elements tags
//body , div , p etc..
//and this method build a node list is something similar to arrays
//so for ex :- 1st paragraph is element 0 2nd paragraph is element 1 and so on.
function DoSomethingNew(){
var paragraph = document.getElementsByTagName("p");
for(i=0; i<paragraph.length; i++){
var changeSpecificPara = paragraph[i].style.fontStyle = "italic";
}
}


