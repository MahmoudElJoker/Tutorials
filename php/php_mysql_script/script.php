<?php
require_once("conf.php");
session_start();
$html_start = <<<html
<!DOCTYPE html>
<html>
<head>
<title>email sub</title>
</head>
<body>
html;
$html_end = <<<html
</body>
<html>
html;
$html_sub_form = <<<html

<center>
<form action="script.php" method="POST">
<input type="email" name="email_address" id="email" placeholder="example@example.com" />
<input type="submit" value="subscription" />
</from>
</center>

html;
$html_unsub_form = <<<html

<center>
<form action="unsub.php" method="POST">
<p>your subscription successfully done.</p>
<input type="submit" value="unsubscription" />
</from>
</center>

html;

$bool = false;
@$email = $_POST['email_address'];
if(isset($email)){
if(!empty($email)){
$query = "SELECT `email` FROM sub WHERE `email` = '".mysql_real_escape_string($email)."'";
$db_query = mysql_query($query) or die('<center>something went wrong please check that everything is correct..</center>');
if(@mysql_num_rows($db_query) > 0){
echo "<center>this email already exist check your email address for news.</center>";
}else{
$_SESSION['email'] = $email;
$query ="INSERT INTO sub SET email ='".mysql_real_escape_string($email)."'";
$db_query = mysql_query($query) or die('<center>something went wrong please check that everything is correct..</center>');
$bool = true;
}
}else{
echo "<center>please enter your email address.</center>";
}
}
if($bool === false){
echo $html_start;
echo $html_sub_form;
echo $html_end;
}else{
echo $html_start;
echo $html_unsub_form;
echo $html_end;
}

?>