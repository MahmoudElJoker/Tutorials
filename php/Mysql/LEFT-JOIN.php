<h2>LEFT JOIN</h2>
<?php
/*
very important in mysql (LEFT JOIN)
and left join mean the first table..
for ex :-
SELECT people.name,pets.pet 
FROM people LEFT JOIN pets 
ON people.id = pets.people_id;
//left join display the data in the left table even if it doesn't exits in the right table
//the table before on is the first table and it called left table
//and the a other table is the second table and it called the right table
//and ON here for the condition like where..
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
$query = "SELECT people.name , pets.pet FROM people LEFT JOIN pets ON people.id = pets.people_id";

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