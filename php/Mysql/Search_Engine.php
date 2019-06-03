<?php
/*
simple search engine..

very important 
mysql_real_escape_string() function very important for SQL injection
*/

//server info
$host = 'localhost';
$user = 'root';
$pass = '';

//database name
$db_name = 'db_2_7_like_search_engine';

//table name
$table_name = 'names';

//column name
$col_name = 'name';

//connect to mysql server
@$mysql_conn = mysql_connect($host,$user,$pass) or die('something went wrong while trying to connect to MYSQL Server!.');

//select a database
@$select_db = mysql_select_db($db_name) or die('there a problem to select this database or might it not exist!.');

if(isset($_GET['q']) && !empty($_GET['q'])){
$qry = $_GET['q'];
//query
$query = "SELECT * FROM $table_name WHERE $col_name LIKE '%".mysql_real_escape_string($qry)."%'";
//check query
@$query_check = mysql_query($query) or die('syntax error , you to correct your query..');
}

?>
<center>
<form action="" method="GET" />
<h2>Simple Search Engine</h2>
<input type="text" name="q" placeholder="search" />
 <input type="submit" value="search" />
</form>
</center>
<br />

<?php
if(isset($_GET['q']) && !empty($_GET['q'])){
$num_row = mysql_num_rows($query_check);
if($num_row == NULL || strlen($qry)<4){
echo "<center>0 result found.</center><br />";
echo "<center><strong>"."No result.."."</strong></center><br />";
}else{
echo "<center>".$num_row." result found.</center><br />";
while($row = mysql_fetch_assoc($query_check)){
echo "<center>".$row[$col_name]."</center><br />";
}
}

}


?>