<?php
/*
how to get user ip address in ur web page
when to use it and why it useful ?
it useful cuz u can block ip address or getting users ip address for analysis....
and it done by $_SEVER['REMOTE_ADDR'];
for ex:-
*/
require 'config.php';
foreach($blocked_IP as $x){
if($x == $ip){
die('Your IP Address '.$ip.' has been blocked.');
}
}

?>

<h1>Welcome to MiDoDev</h1>
<p>MiDoDev is a website that help people to learn methods and subject of programming.</p>