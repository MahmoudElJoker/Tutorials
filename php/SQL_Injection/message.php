<?php
include('ip_address.php');
session_start();
if(isset($_SESSION['username'])){
$user_name = $_SESSION['username'];

$unset_session_html = <<<session
<p><a href="logout.php">Logout</a></p>
session;
echo '<br />'.'<center>Your IP Address: '.$ip_address.'</center><br />';
echo'<center><bold>Welcome</bold>'.' '.'<italic>'.$user_name.'</italic>'.' '.' '.$unset_session_html.'<br /></center>';


}

?>