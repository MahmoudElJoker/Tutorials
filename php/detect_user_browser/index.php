<?php
/*
a cool method to detecting the user browser
that method is get_browser() function and this function has 2 arguments
first argument for user agent for ex:-
$server = $_SERVER['HTTP_USER_AGENT'];
but for now I just have to use null
cuz user agent will only useful in the server I think!
and the second argument take true or false values
something like that -> get_browser($server,true); or get_browser(null, true);
and something very important this get_browser(); function contains array
so if I have create a var for example like this :-
$browser = get_browser(null,true);
this $browser variable is an array
and can check it by using print_r() function
(function used for displaying all elements in an array)....
and if I have making a variable it may have something inside
like that $browser['platform']; or $browser['browser']; etc..
*/

$browser = get_browser(null,true);
//print_r($browser);
echo '<br />'.'<br />';

//so for example if I wanna know what is my current browser I use I can echo out something like that
echo $browser['browser'];
echo '<br />'.'<br />';

/*
it might be useful if I have to make a visitor script
cuz for sure I will need to know which browser the visitors use
not just the IP address..
it for example I will check if the browser was firefox or not
and because there some word UPPER-CASE
then I will need to covert it to a lower-case
by using strtolower function
*/
$browser = strtolower($browser['browser']);
if($browser != 'firefox'){
echo 'You\'re not using Mozilla firefox please do.';
}

?>