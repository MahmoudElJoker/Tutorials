<?php
/*****************
String function
it useful to know how many words we have in string
it something like size() function in c++ or length function in java but it count words not characters
and that done by str_word_count(); function in php
also we can use something like that for count array str_word_count(array,1);
for ex:-
print_r(array,1)
for Associative Arrays
using something like that
print_r(array,2)
******************/
$string_test = 'I will hack the programming one day .';
$size_of_string = str_word_count($string_test);
echo 'You have '.$size_of_string.' characters in your string <br /><br />';
$size_of_string = str_word_count($string_test,1);
print_r($size_of_string);
echo '<br /><br />';
/* for Associative Arrays */
$size_of_string = str_word_count($string_test,2);
print_r($size_of_string);
echo '<br /><br />';
/* third type is to include character or sign like . in counting
for ex..
*/
$size_of_string = str_word_count($string_test,1,'.');
print_r($size_of_string);
echo '<br /><br />';
echo '<br /><br />';
/* Very important string shuffled 
and u can shuffled the string using str_shuffle(); function
what actually this function do is random characters in string
this function very useful for making random name for files
in uploading files script web site or may if there a section in your web site
that allow users to upload files it will be useful for this section.
------------------------------------
strlen() function for length of strings
----------------------------------------
substr() function -> mean subtract 
and this function useful for substracting some characters from string and substr() function must have 2 parameters at least
for example
substr($string,5);
*/
$str = 'I\'m so smart..';
$shuffled = str_shuffle($str);
echo $shuffled;
$sub_string = substr($shuffled,strlen($str)/2);
echo '<br />'.$sub_string;
echo '<br /><br />';
/*      
strrev() function useful if u wanna reverse characters in string..
for ex
str_rev($string);
*/
$reverse = strrev($str);
echo $reverse;
echo '<br /><br />';

/*similarity function
it function for comparing strings and give you result how % the similarity is between these strings
for ex :-
similar_text($str1,$str2,$similarity);
 */
$str1 = 'I\'m so smart & I will hack the programming it may take time but, I\'ll challenge my self in it.';
$str2 = ' php is cool scripting language I will hack php very soon ';
similar_text($str1,$str2,$similarity);
echo 'Similarity is '.$similarity.'%';
/*
trim function very useful to remove whitespace from file
for example if i wanna make white space remover for java script then I will use trim() function.
to remove space from right side using rtrim 
to remove space from left side using ltrim
*/
$trimmed = trim($str2);
$trimmed2 = ltrim($str2);
$trimmed3 = rtrim($str2);
echo '<br />';
echo $trimmed;
echo '<br />';
echo $trimmed2;
echo '<br />';
echo $trimmed3;
echo '<br />';
/* 
addslashes() function
this function adding slashes to ur string might it be for html code 
might for something else like make some scripting for programming like code fight etc..
-------------------------------------
and htmlentities() function
this function vert useful for remove html tags
-----------------------------
stripslashes(); function very useful for security
like sql injection and database
it simply remove slashes
*/
$str_test = 'these function are very <img src="" alt="" /> useful in web development.';
$slashes = htmlentities(addslashes($str_test));
echo $slashes.'<br />';
echo stripslashes($slashes);

?>