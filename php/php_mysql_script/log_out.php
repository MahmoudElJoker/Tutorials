<?php
if(isset($_COOKIE['User_Name'])){
require_once('config.php');
$user = $_COOKIE['User_Name'];
setcookie('User_Name',$user,time()-2000);
 unset($_SESSION['usr_name']);
//$time = time();
//$tb_name = 'log_out';
//$query = mysql_query("INSERT INTO $tb_name SET Timestamp = Now()");
//$log_out_time = mysql_query("SELECT Max(Timestamp) FROM $tb_name");
//while($last_log_out = mysql_fetch_array($log_out_time))
//echo $last_log_out['Max(Timestamp)'];

//echo '<br />'.date('H:i:s',$time);
header('Location: http://localhost/php_mysql_script/login.php');
die();
}else{
header('Location: http://localhost/php_mysql_script/index.php');
die();
}
?>