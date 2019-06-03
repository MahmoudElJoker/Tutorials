<?php

define("host","localhost");

define("User","root");

define("Password","");

define("db_name","test"); 
//connect to mysql server

$mysql_connect = mysql_connect(host,User,Password) or die('Something went wrong while connecting to your server..');
 
//select a database

$select_db = mysql_select_db(db_name,$mysql_connect) or die('Something went wrong while connecting to your database');


?>
