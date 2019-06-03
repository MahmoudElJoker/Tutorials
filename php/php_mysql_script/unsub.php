<?php
require_once("conf.php");
session_start();
if(isset($_SESSION['email'])){
$email_session = $_SESSION['email'];
if(!empty($email_session)){
$query_2 = "DELETE FROM `sub` WHERE `email` ='".mysql_real_escape_string($email_session)."'";
@mysql_query($query_2) or die('<center>something went wrong please check that everything is correct..</center>');
echo "<center>unsubscription done successfully.</center>";
}
}

unset($_SESSION['email']);

?>