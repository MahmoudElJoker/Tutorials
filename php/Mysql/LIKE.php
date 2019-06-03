<?php
/*
the use of LIKE , NOT LIKE statement in MYSQL , and how to make a simple search engine..
//% at the begin of the word ignore any word before the current word.
//% at the end of the word ignore any word after the current word.
//_ to skip one character 
//__ to skip 2 characters and so on...
*/
//server info
$host = 'localhost';
$user = 'root';
$pass = '';

//database name
$db_name = 'db_2_7_like_search_engine';

//connect to mysql server
@$mysql_conn = mysql_connect($host,$user,$pass) or die('something went wrong while trying to connect to MYSQL Server!.');

//select a database
@$select_db = mysql_select_db($db_name) or die('there a problem to select this database or might it not exist!.');

//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name LIKE '%Garrett'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";

//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name LIKE 'Garrett%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";


//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name LIKE 'Billy%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";

//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name LIKE '%g%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";


//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name NOT LIKE '%g%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";

//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name  LIKE '__l%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";
//like and some queries..
@$query = mysql_query("SELECT * FROM names WHERE name  LIKE 'ma%'") or die('syntax error , you to correct your query..');

//echo out the result
while($row = mysql_fetch_assoc($query)){
echo $row['name']."<br />";
}
echo "<br /><br />";
?>