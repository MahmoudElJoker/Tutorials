<?php
/*
include and require functions
why we need them and when to use them!.
simply it's very useful to include another page in php
might this page is functions or page for header or styling etc..
and include best choice for design based
require function useful if the page dosen't exist cuz if so this function kill the rest of the current page
for example
*/
//require ('doesntexist.php');
include 'Include_Require.php';
$var = 'include testing1';
echo $var.'</br>';
echo $var1;

/*
require_once();
and
include_once();
function check if the file was included or required before in page
for ex:-
*/
include_once('Include_Require.php');
/* as u see in output nothing happin' cuz u already have include this file once 
and it similar to
if(defined('Include_Require.php')){
inluce 'Include_Require.php';
}
*/
require_once('Include_Require.php');
/* here too the same nothing happin' cuz u already include that file but if 
try to make it before the include or require u will see the output more than once
and it similar to
if(defined('Include_Require.php')){
require 'Include_Require.php';
}
*/
?>