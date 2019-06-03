
<form method="post" action="register.php"/>
<?php 
if(isset($_SESSION['err_n']) && !empty($_SESSION['err_n'])){
if($_SESSION['err_n'] == 3){
 echo "<br /><a style= \"color: red\">"."*error: gender should be male or female.."."</a>"; 
 unset($_SESSION['err_n']);
 }
 }
 ?>
<div class="row">
<label for="first-name">First name:</label>
<input type="text" name="first-name" title="First Name" placeholder="first name" required="required" id="first-name" value="" />
<label for="last-name">Last name:</label>
<input type="text" name="last-name" title="Last Name" placeholder="last name" required="required" id="last-name" value="" />
</div> 

<div class="row">
<label for="email">Email:</label>
<input type="email" name="email" title="Email" placeholder="email@email.com" required="required" id="email" value="" />
<?php if(isset($_SESSION['err_n']) && !empty($_SESSION['err_n'])){
 if($_SESSION['err_n'] == 2){
 echo "<br /><a style= \"color: red\">*".$Email." is already exist.."."</a>"; 
 unset($_SESSION['err_n']);
 }
 }
 ?>
</div> 

<div class="gender">
<label id="Glabel">Gender:</label>
<input type="radio" name="gender" title="" value="Male" id="GD1" required="required" />
<label for="GD1">Male</label>
<input type="radio" name="gender" title="" value="Female" id="GD2" required="required" />
<label for="GD2">Female</label>
</div>
<div class="row">
<label for="user-name">User Name:</label>
<input type="text" name="user-name" title="User Name" placeholder="user name" required="required" id="user-name" value="" />
<?php if(isset($_SESSION['err_n']) && !empty($_SESSION['err_n'])){
 if($_SESSION['err_n'] == 1){
 echo "<br /><a style= \"color: red\">*".$User_Name." is already exist.."."</a>"; 
 unset($_SESSION['err_n']);
 }
 }
 ?>
<label for="password">Password:</label>
<input type="password" name="password" title="User Name" placeholder="password" required="required" id="password" value="" />
</div>

<div  class="row" ></div>
<input type="submit" name="submit" id="sign-up-lp" value="Register" />
</div>
</form>
