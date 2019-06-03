/*
Date objects,
to create an object there to ways to do that,
first way like this :-
obj.method();
the other way :-
var obj = new method();
and that very useful with date functions/methods,
this also called a reference object,
new keyword take a copy of an object and put that to the variable..
some method in Date objects :-
getYear();
setYear();
toDateString();
toTimeString();
Date();

*/

//examples

var DateNow = new Date();
document.write("Date Now : "+DateNow+"<br /><br /><br />");

//to convert the Date to string format
var DateStrFormat = DateNow.toDateString();

document.write("Date Now : "+DateStrFormat+"<br /><br /><br />");

//to convert the Time to string format

var TimeStrFormat = DateNow.toTimeString();

document.write("Time Now : "+TimeStrFormat+"<br /><br /><br />");

//setYear method
DateNow.setYear(2019);

document.write("Year : "+DateNow+"<br />");

//getYear method
DateNow.getYear();

document.write("Year : "+DateNow+"<br />");
