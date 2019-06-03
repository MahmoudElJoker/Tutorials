<?php
require('injection_config.php');


@$user_name = $_POST['user'];
@$password = $_POST['password'];

//PHP to form
if(isset($_POST['user']) && isset($_POST['password'])){
  if(!empty($user_name) && !empty($password)){
  //MYSQL section
$tb_name = 'injection_tb';
$query = <<<qry
SELECT * 
FROM `$tb_name` 
WHERE `USER_NAME` = '$user_name' 
AND `PASSWORD` = '$password'
qry;

@$MYSQL_Qry = mysql_query($query);

//check if user name & password are true
//very important it can be injected by a trick like this
//'or ''='
if(@mysql_num_rows($MYSQL_Qry) > 0){
session_start();
$_SESSION['username'] = $user_name;
header('Location: message.php');
}else{
echo '<center>UserName/Password wrong please try again, and put the correct one..</center>'.'<br />';
}

  }

}



//html section
$html_form = <<<form
<center>
<form action="injection_test.php" method="POST" >
<label for="user">User name: </label>
<input type="text" name="user" id="user" placeholder="user name" /><br /><br />
<label for="password"> Password: </label>
<input type="password" name="password" id="password" placeholder="******" /><br /><br />
<input type="submit" value="login" />
</form>
</center>
form;

echo $html_form;




?>