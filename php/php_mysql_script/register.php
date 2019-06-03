<?php
require_once('config.php');
if(isset($_COOKIE['User_Name'])){
header('Location: http://localhost/php_mysql_script/index.php');
die();
}

//database table name
$check = false;
$error_num = 0;
if((isset($_POST['user-name']) && isset($_POST['password'])&& 
    isset($_POST['email']) && isset($_POST['first-name']) && 
	isset($_POST['last-name']) && isset($_POST['gender'])) &&
  (!empty($_POST['user-name']) && !empty($_POST['password'])&&
   !empty($_POST['email']) && !empty($_POST['first-name']) && 
   !empty($_POST['last-name']) && !empty($_POST['gender'])) ) {
$First_Name = $_POST['first-name'];
$Last_Name = $_POST['last-name'];
$User_Name = $_POST['user-name'];
$Password = $_POST['password'];
$Email = $_POST['email'];
if(strtolower($_POST['gender']) == "male" || strtolower($_POST['gender']) == "female"){
$Gender = $_POST['gender'];
//insert data into database
$insert_qry = "INSERT INTO `$tb_name` SET UserName='".mysqli_real_escape_string($mysql_connect,$User_Name)
."',Password='".md5($Password)."',FirstName='".mysqli_real_escape_string($mysql_connect,$First_Name)."',LastName='".
mysqli_real_escape_string($mysql_connect,$Last_Name)."',Email='".mysqli_real_escape_string($mysql_connect,$Email)
."',Gender='$Gender'";
} else $error_num = 3;



if($error_num != 3){
$check_userName = "SELECT * FROM $tb_name WHERE UserName = '".mysqli_real_escape_string($mysql_connect,$User_Name)."'";
$check_email = "SELECT * FROM $tb_name WHERE Email = '".mysqli_real_escape_string($mysql_connect,$Email)."'";
$db_queryUS = $mysql_connect->query($check_userName);
$db_queryEM = $mysql_connect->query($check_email);

if(mysqli_fetch_array($db_queryUS, MYSQLI_BOTH))
$error_num = 1;

else if(mysqli_fetch_array($db_queryEM, MYSQLI_BOTH))
$error_num = 2;
}

if($error_num!= 0){
session_start();
$_SESSION['err_n'] = $error_num;
}else{
//using the query to insert the data to the current table
//old version
//$db_query = mysql_query($insert_qry) or die('something went wrong please check that everything is correct..');
$db_query = $mysql_connect->query($insert_qry);
$check = true;
setcookie('User_Name',md5($User_Name.rand(0,pow(10,6))),time()+2000);
session_start();
$_SESSION['usr_name'] = $User_Name;
}
   }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<title>MiDoDev Register</title>
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
if(isset($_COOKIE['User_Name']) && isset($_COOKIE['Password'])){
echo '<li><a href="log_out.php">Logout</a></li>';
}else{
echo '<li><a href="register.php">Register</a></li>';
echo '<li><a href="login.php">Login</a></li>';
}
?>
</ul>
</div>

<div id="Register">
<p class="">
<?php 
if($check==true) 
echo "Congratulation Your register is done ".$First_Name;
else
include_once('reg_form.php'); 
?>
</p>
</div>

</body>
</html>