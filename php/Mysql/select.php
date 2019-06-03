<?php
/*
some good example about select statements
and to select something from a table in a database
need to use something called query ,
and to make a query need to use a function called mysql_query(); ,
inside this function will write the query that allow me to select something from a table in mysql database.
for ex : -
$query = mysql_query("SELECT * FROM school where id = 2"); ,
and will need another function called mysql_fetch_assoc(); to print or make some action in a table in mysql database.
and will need a while loop as will for ex :-
while($row = mysql_fetch_assco($query)){
echo $row['row_name'];
there another function called 
mysql_error(); it's very useful function provided by php
with many common errors..
}
*/
require_once('connect-to-server-and-database.php');
//ASC to sort data in ascending way
//DESC to sort data in descending way
$query1 = "SELECT * FROM `food` ORDER BY `id` ASC";

if($check_query1 = mysql_query($query1)){
echo 'query success.';
}else{
//echo mysql_error();
echo 'query failed.';
}

echo "<br /><br />";
echo "food table : <br />";
echo 'id'.'  '.'food'.'  '.'calories'.' '.'healthy_unhealthy'.'<br />';
while($row = mysql_fetch_assoc($check_query1)){
echo $row['id'].'  '.$row['food'].'  '.$row['calories'].' '.$row['healthy_unhealthy'].'<br />';

}

echo '<br /><br />';

$query2 = "SELECT `food` , `calories` FROM `food` WHERE `healthy_unhealthy` = 'h' ORDER BY `id` DESC";
if($check_query2 = mysql_query($query2)){
echo 'query success.'.'<br /><br />';
}else{
//echo mysql_error();
echo 'query failed.'.'<br /><br />';
}
echo 'food'.'  '.'calories'.'<br />';
while($row = mysql_fetch_assoc($check_query2)){
echo $row['food'].' has '.$row['calories'].' Calories.'.'<br />';
} 

echo '<br /><br />';

$query2 = "SELECT `food` , `calories` FROM `food` WHERE `healthy_unhealthy` = 'u' ORDER BY `id` DESC";
if($check_query2 = mysql_query($query2)){
echo 'query success.'.'<br /><br />';
}else{
//echo mysql_error();
echo 'query failed.'.'<br /><br />';
}
echo 'food'.'  '.'calories'.'<br />';
while($row = mysql_fetch_assoc($check_query2)){
echo $row['food'].' has '.$row['calories'].' Calories.'.'<br />';
} 
/*
very useful function called mysql_num_rows() it can count the number of rows
and it allow me to know , if there a data exists in the table or not..
for ex :-
I wanna make query then , this query contain something similar to this
$query = "SELECT * FROM food where id=10 "
there no id equal to 10 then there no result will exists,
so in this case I wanna to show message to the user that data
, are not found..
*/

echo '<br /><br />';

$query5 = "SELECT `food` , `calories` FROM `food` WHERE `healthy_unhealthy` = 'u' AND `calories` = '250' ORDER BY `id` DESC";
if($check_query5 = mysql_query($query5)){
if(@mysql_num_rows($check_query5) == NULL){
echo "No result found.."."<br />";
}else{
echo 'food'.'  '.'calories'.'<br />';
while($row = mysql_fetch_assoc($check_query5)){
echo $row['food'].' has '.$row['calories'].' Calories.'.'<br />';
} 
}
}

//there a very important function in php for mysql
//caled mysql_result() and it takes 3 arguments
// first argument for the check_query , second argument for row number
// third argument for the row name
//for ex :-
// mysql_result($check_query5,0,'food');

$check = @mysql_result($check_query5,0,'food');

echo $check
?>