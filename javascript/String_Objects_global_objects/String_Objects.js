/*
global object and string object/methods are very important
this show the difference between JavaScript and other language such as php,
we can call the string method by using string object or global object,
for ex :-
var str = "MiDo is a great programmer..";
to use a global object
make something like that
str = str.toUpperCase();
there many useful method in string object, such as :-
.toUpperCase();
.toLowerCase();
.length;
.charAt();
.replace();
.bold();
.italics();
and more......

there another way to create an object that by using new keyword..
*/
var str = "MiDo is a great programmer..";
var length_str = str.length;
var new_str = str.replace("programmer","Developer");
var bold_str = str.bold();
var itailc_str = str.italics();
var upper_str = str.toUpperCase();
var lower_str = str.toLowerCase();
var char_str = str.charAt(16);
document.write("The length of string = " + str + "<br />");
document.write("The length of string = " + length_str + "<br />");
document.write("new value of string : " + new_str + "<br />");
document.write("Bold string : " + bold_str + "<br />");
document.write("Italic string : " + itailc_str + "<br />");
document.write("UpperCase characters : " + upper_str + "<br />");
document.write("LowerCase characters : " + lower_str + "<br />");
document.write("specific character : " + char_str);