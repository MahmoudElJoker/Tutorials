<h2>JOIN</h2>
<?php
/*
the difference between JOIN  , LEFT JOIN and RIGHT JOIN
JOIN display the data if there a data exists in both tables , left and right table, 
or first and second tables , so if there a data in one table JOIN will display no thing cuz other table must have a data too
as well!.
*/

//declare connection variables
$db_name = 'db_join_test';
$host = 'localhost';
$user_name = 'root';
$password = '';

//error messages
$select_db_error = 'there no database exists..';
$mysql_conn_error = 'something went wrong while connecting to mysql server...';
$query_error = "You have an error in your sql syntax..";
$check = "0";

//connect to the MYSQL Server
@$conn_db = mysql_connect($host,$user_name,$password);
@$select_db = mysql_select_db($db_name);


//query to join the tables 
$query = "SELECT people.name , pets.pet FROM people JOIN pets ON people.id = pets.people_id";

//check if the query is working , then run the query..
@$check_query = mysql_query($query);


if(!$conn_db){
$check = "conn_error";
}
else if(!$select_db){
$check = "db_error";
} 
else if(!$check_query){
$check = "query_error";
}

//error handling messages
switch($check){
case "conn_error" : echo $mysql_conn_error.'<br />';
break;
case "db_error": echo $select_db_error.'<br />';
break;
case "query_error": echo $query_error.'<br />';
break;
default: continue;
}

echo '<big>name</big>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<big>pet</big>'.'<br />';
while($row = mysql_fetch_assoc($check_query)){
echo  $row['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['pet'].'<br />';
}

?>