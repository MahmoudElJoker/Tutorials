<?php
/*
what cookie is and why it's useful?!
a cookie is a piece of data or file stored specific information
and that information are unique for the user and the web site the user have viewed..
and the cookies useful cuz u can use it for a long time cuz a session can used until the browser closed
but cookies might still for a years and cookies very useful for log in and log out and register forms etc..
and setting cookies in php can by done by setcookie(); function
and this function have three arguments 1 for the cookie name and second argument for the value
and the last argument for the time u wanna keep that cookie for!..
and very important must use time(); function for the third argument..
and for using cookie or something that done by $_COOKIE['name']; structure
for ex :-
setcookie('myname','MiDo',time()+20);
*/

setcookie('myname','MiDo',time()+2000);



?>