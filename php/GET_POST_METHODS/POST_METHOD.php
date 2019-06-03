<?php
/*
post method very useful method to use for forms
but when to use post , get ?
get good for simple things like page number simple form etc..
but for security and good performance it better to use POST
cuz each server has limit in Getting variables in url
also post very useful for uploading files etc..
for ex:-
and for security
must use htmlentities function
like that htmlentities($_POST['name']);
*/
if(isset($_POST['user'])&&isset($_POST['pass'])){
$user = htmlentities($_POST['user']);
$password = htmlentities($_POST['pass']);
if(!empty($user)&& !empty($password)){
echo 'Welcome '.$user.'<br /><br />';
echo 'Your Current Password : '.$password;
}
else{
echo 'Please Enter the user name and password';
}
}

?>

<form action="POST_METHOD.php" method="POST">
<label for="user">USER NAME :</label>
<input type="text" name="user" id="user" /> <br /> <br />
<label for="pass">PASSWORD :</label>
<input type="password" name="pass" id="pass" /> <br /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="submit" value="submit" />
</form>