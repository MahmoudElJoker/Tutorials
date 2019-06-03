<?php
if(isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
}


if(!empty($keyword)){
@$mysql_connect = mysqli_connect("localhost","root","") or die('Something went wrong while connecting to your server..');

@$mysql_db = mysqli_select_db($mysql_connect,"Ajax") or die('Something went wrong while connecting to your database');

$query = "SELECT `Name` FROM `names` WHERE `Name` LIKE '".mysqli_real_escape_string($mysql_connect,$keyword)."%'"; 

$run_qry = mysqli_query($mysql_connect,$query) or die("something wrong in your query..");

while($qry_row = mysqli_fetch_assoc($run_qry)){
	echo $qry_row['Name']."<br />";
}

}
?>