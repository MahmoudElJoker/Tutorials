<?php
@$mysql_connect = mysql_connect('localhost','root','') or die('something went wrong once connecting to mysql server..');
if(@$query = mysql_query("CREATE DATABASE test")){
echo 'Database Created..';
}else{
echo 'the database is already exists..';
}
echo "<br /><br />";
@$select_db = mysql_select_db("test");
if(@$query = mysql_query("CREATE TABLE `sub`(`ID` BIGINT(100) PRIMARY KEY NOT NULL AUTO_INCREMENT ,`email` VARCHAR(100) NOT NULL UNIQUE)")){
echo 'Table Created..';
}else{
echo 'Table is already exists..';
}

?>