<?php
/*
there many uses for $_SEVER['']; keyword or var.
one of the most important use of this keyword is
script name and this keyword typing like that-> $_SERVER['SCRIPT_NAME'];
why that keyword is useful and when to use it?
it useful for html forms and many things cuz
this variable or keyword with SCRIPT_NAME keyword
gives u the name of the current page so for ex:-
u don't need to use many forms in ur web application
if the form make the same work u can just make 1 form and include that
in all pages that u need to use that form in, then using the $_SERVER and SCRIPT_NAME keywords
to take the name file of each page automatically..
for ex :-
I have created these pages :
Server-Variables-Script.php
test.php
form.php
so lets test it.........
*/

require_once ('form.php');
if(isset($_POST['button']))
echo 'Server Variables Script Page';

?>