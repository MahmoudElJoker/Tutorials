<?php
/*
die(); and exit(); functions are very useful for showing error
or to break the rest of ur web page also it useful when connect ur web page to database
for example if something went wrong in connecting to the database then just using die() or exit() function
both of them the same
for example
die('connection to database faild');
*/
$mido = 20;
$var = 22;
echo 'Hello';
echo ' ok.';
if($mido !== $var)
die('Error.');
echo 'mido';

?>