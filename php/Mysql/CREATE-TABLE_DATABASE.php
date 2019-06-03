<?php
/*
it's very simple to create MYSQL database and table in PHP..
*/
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'MIDOWEB';

@$mysql_connect = mysql_connect($host,$user,$pass) or die('something went wrong once connecting to mysql server..');
if(@$query = mysql_query("CREATE DATABASE $db_name")){
echo 'Database Created..';
}else{
echo 'the database is already exists..';
}
echo "<br /><br />";
@$select_db = mysql_select_db($db_name);
if(@$query = mysql_query("CREATE TABLE `user`(`ID` BIGINT(100) PRIMARY KEY NOT NULL)")){
echo 'Table Created..';
}else{
echo 'Table is already exists..';
}

?>