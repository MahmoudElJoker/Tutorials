
<!DOCTYPE html>
<html lang="en-us">
<head>
<title>MiDoDev</title>
<meta name="description" content="Php script to test register and login form with mysql" />
<meta name="keyword" content="php,scropt,test,form" />
<meta http-equiv="author" content="MiDo"  />
<meta http-equiv="language-content" content="en-us"  />
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php
session_start();
if(isset($_COOKIE['User_Name']) && isset($_SESSION['usr_name'])){
$user = $_SESSION['usr_name'];
echo 'Welcome '.$user.' in MiDoDev';
}

?>
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

</body>
</html>