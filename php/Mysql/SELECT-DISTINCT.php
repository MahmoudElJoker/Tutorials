<?php
/*
SELECT DISTINCT very useful statement to distinct the data in SQL/MYSQL
it just an example for the use of DISTINCT
*/
//server info
$host = 'localhost';
$user = 'root';
$pass = '';

//database name
$db_name = 'school';

//connect to mysql server
@$mysql_conn = mysql_connect($host,$user,$pass) or die('something went wrong while trying to connect to MYSQL Server!.');

//select a database
@$select_db = mysql_select_db($db_name) or die('there a problem to select this database or might it not exist!.');

//like and some queries..
@$query = mysql_query("SELECT DISTINCT last_name FROM students") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['last_name']."<br />";
}
echo "<br /><br />";



?>