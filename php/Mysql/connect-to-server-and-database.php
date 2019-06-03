<?php
/*
how to connect to the mysql db in php
first need to call : mysql_connect(); function
and this function takes 3 arguments host name , username , password
for ex :-
mysql_connect('localhost','root','');
*/
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'db_20_6_php_training';

@$conn_to_server = mysql_connect($host,$user_name,$password);

if(!$conn_to_server){
echo 'something went wrong while trying to connect to the database server..';
}

/*
how to select a mysql database in php
that done by using mysql_select_db() function
it takes 1 argument database_name 
for ex : -
mysql_select_db($db_name);
*/

@$select_db = mysql_select_db($db_name);

if(!$select_db){
echo 'the database is not exists..';
}




?>