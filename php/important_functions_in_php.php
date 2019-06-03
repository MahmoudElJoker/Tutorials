<?php
//cool function for MYSQL errors called :- mysql_error();
//it's very good function to handle any MYSQL error in connection and other things
//mysql_num_rows(); function , very useful to know if there any row exits or not
//in your query

mysql_error();
mysql_num_rows();

//very important to keep the user data in login and registration system,
//by using simple if statement for ex :-
if(isset($user_name)){
echo $username;
}

//for re-password
//must use if statement to check of both password is equal or not
//for ex :-
if($password != $repassword){
//error_message
}

//some notes
//in mysql when make a length of a column 50 for example,
// and then if user put 60 character instead of 50 , in this case only the first 50 character will be stored in the 
//record/column
?>