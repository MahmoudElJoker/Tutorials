/*
very important global and local variables in JS
are the same idea as c, c++ and java..
*/

//a quick example

var myname = "MiDo";
function test(){
//if I did remove var before the variable it will be a global variable
//for example
myjob = "Programmer";
var my_job = "Developer";
alert(my_job);
}

test();

//test global variable
document.write(myname + " is a");
//so it work as well

//test var without var keyword
document.write(" "+myjob);
//it work as well cuz when I remove a var before a variable it turn to  a global variable instead of local variable..

//test local variable inside test function
document.write(my_job);
//here it will never work cuz it a local variable for test function..