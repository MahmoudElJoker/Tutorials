<?php
/*
header function is very useful for redirecting users to another page
it better than http-equiv refresh meta tag in HTML
so for ex :-
header('Location : http://localhost/tut/$_SERVER/host.php');
*/


//it will redirecting me to host page 
header('Location: http://localhost/tut/$_SERVER/host.php');
?>