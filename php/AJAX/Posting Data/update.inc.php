<?php

@$mysql_connect = mysqli_connect("localhost","root","") or die('Something went wrong while connecting to your server..');

@$mysql_db = mysqli_select_db($mysql_connect,"ajax_posting") or die('Something went wrong while connecting to your database');

if(isset($_POST['post'])){
	$post = $_POST['post'];
	if(!empty($post)){

  $query = "INSERT INTO `data` VALUES('','".mysqli_real_escape_string($mysql_connect,$post)."')"; 
  $run_qry = mysqli_query($mysql_connect,$query) or die("something wrong in your query..");
   echo 'done.';
	} else {
		
    echo 'please type something..';	
	
	}
}
 
?>