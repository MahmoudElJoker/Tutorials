<?php
/* to find user Ip address using
$_SERVER['REMOTE_ADDR'];

-----------------------------------

very important in php we can't access global variable inside function like c++ and java
but we need to declare inside the function something like that
global $VAR;
*/
$USER_IP = $_SERVER['REMOTE_ADDR'];

echo $USER_IP.'<br />';
function user_ip(){
global $USER_IP;
$ip = 'Your IP Address is : '.$USER_IP;
echo $ip;
}
user_ip();

?>