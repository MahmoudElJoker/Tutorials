<?php 
require_once('config.php');
if(isset($_COOKIE['User_Name'])){
header('Location: http://localhost/php_mysql_script/index.php');
die();
}
if((isset($_POST['user-name'])&&isset($_POST['password'])) && (!empty($_POST['user-name'])&&!empty($_POST['password'])) ){
$User_Name = $_POST['user-name'];
$Password = $_POST['password'];
$Search_qry = "SELECT * FROM $tb_name WHERE UserName = '".mysqli_real_escape_string ($mysql_connect,$User_Name)
."' AND Password = '".md5($Password)."'";
$Check_qry = $mysql_connect->query($Search_qry);
//die('Something Went Wrong While Checking Your Table.');
}

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<title>MiDoDev Login</title>
<meta name="description" content="Login" />
<meta name="keyword" content="Login" />
<meta http-equiv="author" content="MiDo"  />
<meta http-equiv="language-content" content="en-us"  />
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div id="header">
<h1>MiDoDev</h1>
<p>Php script to test register and login form with mysql</p>
</div>
<div id="navbar">
<ul>
<li><a href="index.php">Home</a></li>
<?php
if(isset($_COOKIE['User_Name'])){
echo '<li><a href="log_out.php">Logout</a></li>';
}else{
echo '<li><a href="register.php">Register</a></li>';
echo '<li><a href="login.php">Login</a></li>';
}
?>
</ul>
</div>

<div id="login-form">
<p>
<form method="post" action=""/>
<?php
if((isset($_POST['user-name'])&&isset($_POST['password'])) && (!empty($_POST['user-name'])&&!empty($_POST['password'])) ){

//old version
//if(mysql_fetch_assoc($Check_qry)){
//new version
if(mysqli_fetch_array($Check_qry, MYSQLI_BOTH)){
setcookie('User_Name',md5($User_Name.rand(0,pow(10,6))),time()+2000);
session_start(); 
$_SESSION['usr_name'] = $User_Name;
header('Location: http://localhost/php_mysql_script/index.php');
die();
}else{
echo 'User Name Or Password Wrong!.';
} 
}

?>
<div class="row">
<label for="user-name">User Name:</label>
<input type="text" name="user-name" title="User Name" placeholder="Enter user name" required="required" id="user-name" value="" />
</div>
<div class="row">
<label for="password">Password:</label>
<input type="password" name="password" title="Password" placeholder="Enter Password" required="required" id="password" value="" />
</div> 
<div  class="row" ></div>
<a href="register.php"><input type="button" name="register" id="sign-up-lp" value="Sign up" /></a>
<input type="submit" name="submit" id="sign-in-lp" value="Sign in" />
<p id="forget_pass-lp"><a href="">Forget password</a> &nbsp;&nbsp;<a href="">Help!</a></p>
</form>
</p>

</body>
</html>