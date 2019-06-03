<?php
/*
there two ways to unsetting session in php
the first way is by using session_destroy(); function
and the other way by using unset() function and inside 
unset function fill up session name that we wanna unset
for ex : - unset($_SESSION['name']);
and something very important before using unset function or session_destroy(); function
must call session_start(); function..
and session_destroy(); function is useful for upset multiple session in the web site
and it for the session for that user for sure..
*/

session_start();

unset($_SESSION['username']);

//session_destroy();

?>