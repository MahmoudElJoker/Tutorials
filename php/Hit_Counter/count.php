<?php
@$db_name = 'php_script';
@$tb_name = 'counter';
@$connect_mysql = mysql_connect('localhost','root','') or die('something went wrong while connecting to MYSQL..');
@$select_db = mysql_select_db($db_name,$connect_mysql) or die('something went wrong while selecting a database..');
@$query = "UPDATE $tb_name SET hit_count = hit_count + 1 WHERE id = 1";
@mysql_query($query) or die('something wrong in your query..');
?>