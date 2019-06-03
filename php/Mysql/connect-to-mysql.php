<?php
/*
very important in php we can use operators like
or , and etc.. also we can use operators like
|| , && etc..

using @ to hide the default error message of php if something went wrong with connecting to the database
*/
@mysql_connect('localhost','root','') or die('Something went wrong while connecting to the database.');
echo 'Connected.';
?>