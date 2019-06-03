<?php
/*
a cool example for GET method with query
*/
require_once('connect-to-server-and-database.php');

?>

<form action="query-1.php" method="GET">
<label>Choose a food type : </label> <br />
<select name="uh">
<option value="h">healthy</option>
<option value="u">unhealthy</option>
</select>
<input type="submit" value="Submit" />
</form>

 
<?php
if(isset($_GET['uh']) && !empty($_GET['uh'])){
$uh = strtolower($_GET['uh']);

//for injection
if($uh=='u' || $uh=='h'){
$query5 = "SELECT `food` , `calories` FROM `food` WHERE `healthy_unhealthy` = '$uh' ORDER BY `id` DESC";
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
}else{
echo 'not found';
}
}


?>