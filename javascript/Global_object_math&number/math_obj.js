/*
math objects are important as string objects ,
there many function/method uder Math object,
but it difference when u call it , not like the string objects, 
to call a math object write something similar to :-
Math.round(variable);
the method under that :-
Math.round();
Math.ceil();
Math.floor();
Math.sqrt();
Math.pow();
and more.......
there another way to create an object that by using new keyword...
*/

var number = 2.4;
var ro = Math.round(number);
var fl = Math.floor(number);
var sq = Math.sqrt(number);
var po = Math.pow(number,2);
var ce = Math.ceil(number);
document.write(timenow+" <br />");
document.write("Number : ".bold()+number+"<br />");
document.write("------------------------------------".bold()+"<br />");
document.write("round : "+ro+"<br />");
document.write("floor : "+fl+"<br />");
document.write("sqrt : "+sq+"<br />");
document.write("power : "+po+"<br />");
document.write("ceil : "+ce+"<br />");