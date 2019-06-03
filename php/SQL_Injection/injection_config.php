<?php
 define("Host","localhost");
 define('User','root');
 define('Password','');
 define('DB_name','injection_db');
 class mysql_connection{
 //constructor
 function __construct(){
 //connect to database
 if(@$db_connection = mysql_connect(Host,User,Password)){

 }else{
  die('something went wrong while connecting to MYSQL server..');
 }
 if(@$select_db = mysql_select_db(DB_name)){

 }else{
 die('MYSQL cannot connect to your database or it not exists..');
 }
 }
 };
$db_conn = new mysql_connection();

?>