<?php
/*
String positions why it useful and when to use it?
strpos(); function it very useful to know the position of character
or word in string
it must have 2 parameters at least and this function can have 3 parameters.
for ex :-
$str = 'This is a string, and it is an example.';
//first parameters is the string that we wanna search in, second parameter is the word or 
// the character the we wanna to know what his position is in the string.
// the third parameter is to select position of the character in string
strpos($str,'is'.3);
*/
$search = 0;
$find = 'is';
$length = strlen($find); 
$str = 'This is a string, and it is an example.';

//echo strpos($str,'is',10);

//searching for a position using while loop
while($str_position = strpos($str,$find, $search)){
echo '<big>is</big> found at '.$str_position.'<br />';
$search = $str_position + $length;
}

?>
