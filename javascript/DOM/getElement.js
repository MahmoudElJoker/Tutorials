/*
JavaScript basics level at 2 steps process
1- select the element
2- change whatever I wanna change in that element
*CSS styles
*change text
*change images
*Validation
*Create new pages
*change internals

getElementsByClassName()
it almost the same as getElementsByTagName()
only different I'm not grabbing by tag name but by class name instead.
so it also create a node list like getElementsByTagName() method
*/

function ChangeColor(){
var par = document.getElementsByClassName("paragraph");
for(i=0; i<par.length; i++){
var changeColor = par[i].style.color = "blue";
}
}
//replace the content with a new one.
function ChangeText(){
//I can replace content in JavaScript by innerHTML property
//for ex :-
var par = document.getElementsByClassName("paragraph");

var changeText = par[0].innerHTML = "JavaScript Fun ^_^";

}

function ReadText1(){
var par = document.getElementsByClassName("paragraph");
//read text from 1st paragraph and then put it in 3rd paragraph.
var ReadText = par[0].innerHTML;
var print = par[2].innerHTML = ReadText; 
}

function ReadText2(){
var par = document.getElementsByClassName("paragraph");
//read text from 2st paragraph and then put it in 3rd paragraph.
var ReadText = par[1].innerHTML;
var print = par[2].innerHTML = ReadText; 
}

function reset(){
var par = document.getElementsByClassName("paragraph");
for(i=0; i<par.length-1; i++){
var RestText = par[i].innerHTML = "JavaScipt one of the coolest languages.";
var ResetColor = par[i].style.color = "black";
}
var RestPar2 = par[2].innerHTML = "";
}