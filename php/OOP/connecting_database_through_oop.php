<?php

class DatabaseConnect{
  //declare constructor.
  public function __construct($db_host,$db_user,$db_pass){
  	echo 'Attempting connection... '.'<br />';
  if(!@$this->connect($db_host,$db_user,$db_pass)){
  	echo 'connection failed';	
  	} else{
     echo 'connected to '.$db_host;
  	}

  }

  public function connect($db_host,$db_user,$db_pass){
   if(!mysqli_connect($db_host,$db_user,$db_pass)){
   	 return false;
   }
   	else {
   	 return true;
   	}
  }

}

$connect = new DatabaseConnect('localhost','root','');

?>