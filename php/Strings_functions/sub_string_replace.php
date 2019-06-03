<?php
/*
Sub sting replace and str_replace functions why it useful and when to use it ?
str_replace(); function it simply replace a new value for string
-------------------
and substr_replace(); it subtract the string and replace
and that have 3 parameters at least and it can have 4 parameters.
for ex:-
*/
$str = 'This part don\'t search. This part search.';
$str_new = substr_replace($str,'Mido',29,4);
echo $str_new;
echo '<br /> <br />';

/* string replace function example 
str_replace(looking for,to replace,string);
and to replace more than one word or character
must use an array
for ex :-
*/
$find = array('is','string','example');
$replace = array('IS','STRING','EXAMPLE');
$str2 = 'This a string, and this is an example.';
$new_str = str_replace('is','',$str2);
echo $new_str;

echo '<br /> <br />';
$new_str = str_replace($find,'',$str2);
echo $new_str;
echo '<br /> <br />';
/* another example to replace more than one word using array */
$new_str = str_replace($find,$replace,$str2);
echo $new_str;

?>