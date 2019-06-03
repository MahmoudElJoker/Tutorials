<?php
/*
functions in php is the same thing in c/c++ and java
but the only difference is when declare a function in php
like that
function Function_name(Parameters,Parameters){

}
or
we can make a function without parameters like java and c++
function Function_name(){

}
may we need to return something like this
function Function_name(Parameters,Parameters){
return Parameters + Parameters;
}
and something very important when declare or call function in php just add name
and don't use dollar sign before that name for example
function mido(){

}
etc..
very important in php we can't access global variable inside function like c++ and java
but we need to declare inside the function something like that
global $VAR;
*/
$USER_IP = $_SERVER['REMOTE_ADDR'];
function mido(){
echo 'Hello MiDo'.'<br />';
}
function add($n1,$n2){
return $n1 + $n2;
}
function user_ip(){
global $USER_IP;
$ip = 'Your IP Address is : '.$USER_IP;
echo $ip;
}
mido();
echo 'Sum = '.add(5,5).'<br />';
user_ip();

?>