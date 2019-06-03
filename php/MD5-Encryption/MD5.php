<?php
/*
md5 is a very important encryption in php, that encryption important for security 
and other things in DB , content etc..
*/
require_once("config.php");
$check = false;
if((isset($_POST['user_name']) && isset($_POST['Password']) )&& (!empty($_POST['user_name']) && !empty($_POST['Password'])) ) {
$User_Name = $_POST['user_name'];
$Password = md5($_POST['Password']);

//insert data into database
$insert_qry = "INSERT INTO `$tb_name` SET user_name='$User_Name',password='$Password'";

//using the query to insert the data to the current table
$db_query = mysql_query($insert_qry) or $check = true;

   }
?>

<style>
#navbar{
text-align:center;
font-size:20px;
background:#333333;
width:1100px;
height:6.3%;
line-height:40px;
margin-top:0px;
margin-left:160px;
margin-right:auto;
margin-bottom:0;
border-radius:15px;
}
#navbar ul li{
display:inline;
padding:5px;
margin:15px;
font-family: "Times New Roman", Times, Serif;
}
#navbar ul{
padding:0px;
margin:5px;
list-style:none;
position:relative;
}
#navbar a{
text-decoration: none;
color:white;
padding: 9px 3px 9px 3px;
margin-top:5px;
}
#navbar a:hover{
background-color:Silver;
color:black;
}
</style>
<center>
<h1>Register</h1>
<div id="navbar">
<ul>
<li><a href="MD5.php">Register Page</a></li>
<li><a href="login-md5-test.php">Login Page</a></li>
</ul>
</div>
<br /><br />
<form method="POST" action="" >
<?php 
if((isset($_POST['user_name'])&&isset($_POST['Password'])) && (!empty($_POST['user_name'])&&!empty($_POST['Password'])) ){
if($check==false){
echo "Congratulation Your register is done ".$User_Name; 
}else{
echo "This user name ".'<strong>'.$User_Name.'</strong>'." is already exists..";
} 
}
echo "<br />";
?>
<label for="user-name">User Name: </label> 
<input type="text" name="user_name" id="user-name" required="required" /> <br /> <br />
<label for="Password">Password: </label>
<input type="password" name="Password" id="Password" required="required" /> <br /> <br />
<input type="submit" value="Register" />
</form>
</center>