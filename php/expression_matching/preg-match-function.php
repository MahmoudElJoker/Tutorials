<?php
/*
Expression matching and preg_match function
why it useful and when to use it?
it useful to searching for word in string or number or anything else
we can even search about spaces and preg_match(); function have 2 or 3 parameters at least
also very important when search about word or something need to use 2 back slash in left and right side 
like the example
for ex :-
preg_match('/word/',$string); 
*/

$str = 'Mido is genius cuz mido is a programmer';
if(preg_match('/mido/',$str)){
echo "match found";
}else{
echo "match not found";
}
/* very useful example to create a useful function search about spaces by using preg_match(); function */
function findspace($str_word){
if(preg_match('/ /',$str_word)){
return true;
}else{
return false;
}
}
$var = 'Midososmart';
echo '<br /> <br />';
if(findspace($var)){
echo 'yea there spaces';
}else{
echo 'it has no spaces';
}

?>