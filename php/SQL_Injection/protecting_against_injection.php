<?php
/*
SQL injection is a real danger , cuz may someone manage to destroying your database by injection
for example :-
may the user put something similar to  :- 'or '' = '
empty equal empty is true so by this trick anyone can have the ability to hack your database,
or by this trick , 'or 1 = 1 and this also true cuz one is actually equal to one ,and
one of the ways are used to protect the query against SQL Injection,
is using mysql_real_escape_string(); function inside the query
*/
$username = 'mido';
$password = '123';
//for example
$query = "SELECT * FROM `Users` WHERE `UserName` ='".mysql_real_escape_string($username)."' , Password = '"
.mysql_real_escape_string($password)."'";

?>