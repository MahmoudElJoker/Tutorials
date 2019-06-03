<?php
/*
the cool thing here in cookies we do not need to call any function
but we can just call that cookie in the current page..
*/


if(isset($_COOKIE['myname'])){
$my_cookie = $_COOKIE['myname'];
echo 'Your name is '.$my_cookie;
}else{
echo 'There no cookie..';
}
?>