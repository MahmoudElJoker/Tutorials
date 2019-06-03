<?php
/*
because REMOTE_ADDR not enough to getting the actual user ip address
then we'll need 3 function or keywords to handle that 
might the user use proxy or might he's have a network 
then we need to check all of that to get the actual ip of the user 
and that done by these functions or keyword
$_SERVER['HTTP_CLIENT_IP'];
$_SERVER['HTTP_X_FORWARDED_FOR'];
$_SERVER['REMOTE_ADDR'];
but it will be only useful in a web server not in a localhost like I code right now.
and I'll just give an example here..
*/

@$client_ip_proxy_check = $_SERVER['HTTP_CLIENT_IP'];
@$http_forward_network_check = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
if(!empty($client_ip_proxy_check)){
$ip_address = $client_ip_proxy_check;
}else if(!empty($http_forward_network_check)){
$ip_address = $http_forward_network_check;
}else{
$ip_address = $remote_addr;
}

echo 'Actual IP Address is :  '.$ip_address;

?>