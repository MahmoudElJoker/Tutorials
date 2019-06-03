<?php
//connent to mysql server
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "web_site";
$tb_name = 'users';

/*old version
$mysql_connect = mysql_connect($host,$user,$pass) or die('Something went wrong while connecting to your server..');
*/

//new version
$mysql_connect = new mysqli($host,$user,$pass,$db_name);

//check if there no errors connecting to mysql
if($mysql_connect->connect_errno)
die('Something went wrong while connecting to your server..');


//Select the database
/*old version
$select_db = mysql_select_db($db_name,$mysql_connect) or die('Something went wrong while connecting to your database');
*/

//new version


?>
