<?php
/*
a unique hit counter is very useful to know the number of your visitors every single day..
and the other uses for it, so I think the best way to make a unique hit counter is by ip address and mysql..
*/
$ip_address = $_SERVER['REMOTE_ADDR'];
$db_name = 'php_script';
$tb_name = 'unique_counter';
$count_tb_name = 'unique_counts';
@$connect_mysql = mysql_connect('localhost','root','') or die('something went wrong while connecting to MYSQL..');
@$select_db = mysql_select_db($db_name,$connect_mysql) or die('something went wrong while selecting a database..');
$check_ip = "SELECT * FROM $tb_name WHERE ip_address = '$ip_address'";
@$check_query = mysql_query($check_ip) or die('something wrong in your query..');
if(!mysql_fetch_assoc($check_query)){
$ip_query = "INSERT INTO $tb_name SET ip_address = '$ip_address'";
@mysql_query($ip_query) or die('something wrong in your query..');
$count_query = "UPDATE $count_tb_name SET UniqueCounter = (SELECT COUNT($tb_name.ip_address) from $tb_name) WHERE id = 1";
@mysql_query($count_query) or die('something wrong in your query..');
$counter_query = "SELECT UniqueCounter FROM $count_tb_name WHERE id = 1";
@$counter = mysql_query($counter_query) or die('something wrong in your counter query..');
while ($row = mysql_fetch_assoc($counter)) {
    echo "Vistors : ".$row["UniqueCounter"];
}
}else{
$counter_query = "SELECT UniqueCounter FROM $count_tb_name WHERE id = 1";
@$counter = mysql_query($counter_query) or die('something wrong in your counter query..');
while ($row = mysql_fetch_assoc($counter)) {
    echo "Vistors : ".$row["UniqueCounter"];
}
}
?>