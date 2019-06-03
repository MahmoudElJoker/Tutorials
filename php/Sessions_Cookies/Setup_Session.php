<?php
/*
why session is useful and when to use it ?
session and cookies are very useful for keep user data save
it very useful for log in and log out systems
and register form etc..
but there some difference between session and cookies
cuz session is done in the server so the user can't see it or edit that
but cookies the user can see it and edit that as well!.
and for setting up a session will need to use session_start(); function
for ex :- 
and very important if I wanna make the session in another page
I must open the setup page first to setting the session up!..
*/

//I have create 2 page 1 for setup the session and the other page for view it.
session_start();
//after starting the session we can put some codes here..

$_SESSION['username'] = 'MiDo';
//so here I set up a username session and a called it MiDo
?>