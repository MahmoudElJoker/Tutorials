<?php
$db_name = "encryption";
$tb_name = "users";
@$mysql_connect = mysql_connect("localhost","root","") or die("Something went wrong while connecting to your server..");
@$select_db = mysql_select_db($db_name,$mysql_connect) or die('Something went wrong while connecting to your database');


?>