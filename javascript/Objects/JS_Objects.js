/*
the real beginning in JS , Objects
one of the most important part of JavaScript
object in JS not much difference about the idea of OOP in c++
but the syntax are difference
for example :-
normal variables be something similar to
var name = "MiDo";
var age = 19;
var fav_color = "red";

but an object is difference , to make an object should write something like this
var obj = {
name : "MiDo",
age : 19 ,
fav_color : "red"
};
we don't use = for variables inside an object but u use : like css
anyway it's not call variables things inside an object but it called properties ,
so think about it as a class in c++.
object also can contain functions and many things as we do in class in c++
for ex :-
document. is an object 
and .write is one of the properties in .document object
and to create a function inside an object , cannot write it the same way as we do in normal function
but it somthing like that
amazing : function(){
document.write("WOW");
}
for ex :-
var obj = {
name : "MiDo",
age : 19 ,
fav_color : "red"
amazing : function(){
document.write("WOW");}
};
very cool isn't it
and to use one of the properties of an object,
very simple, just write something like that
object_name.properties_name;
and functions inside an object called methods, a very important thing in an object in JS
we can change even the data type of a properties,
like that
obj = {
name : "mido",
age : 19
};
obj.name = 19;
and I can even an a new properties that are not exist in object properties
for ex:-
obj.name2 = "Mohamed";
and I can delete a properties in an object by using delete keyword
for ex :-
delete obj.name2;
that's it!..
*/

var obj = {
myname:"MiDo",
myage : 19,
myfavcolor: "red",
Aprogrammer : function(){
document.write(obj.myname + " is a great programmer.");
},
Afav_color : function(){
document.write("<br />"+obj.myname +" favorite color is "+obj.myfavcolor+".");
},
age : function(){
document.write("<br />"+obj.myname +" have a "+obj.myage+" years old.");
},
};



