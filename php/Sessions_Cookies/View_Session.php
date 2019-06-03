<?php
/*
for viewing a session in php we don't need to include 
a session page but we just call the function session_start();
and that can be done in any page of the web site..
for ex :-
*/
session_start();

if(isset($_SESSION['username'])){
$user_name = $_SESSION['username'];
echo 'Welcome '.$user_name;
}else{
echo 'Your session is empty..';
}


?>