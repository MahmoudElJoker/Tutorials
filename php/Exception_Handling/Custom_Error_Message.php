<?php
define('host','localhost');
define('user','root');
define('password','');
define('database','ajax5');


class serverException extends Exception{
	public function showSpecific(){
		return 'Error thrown on line '.$this->getLine().' in '.$this->getFile(); 
	}
	
}

class DatabaseException extends Exception{
	public function showSpecific(){
		return 'Error thrown on line '.$this->getLine().' in '.$this->getFile(); 
	}
	
}

try{
	$mysql_connect = @mysqli_connect(host,user,password);
	if(!$mysql_connect){
	throw new serverException();	
	} else if(!@mysqli_select_db($mysql_connect,database)){
	throw new DatabaseException();
	} else {
		echo 'connected.';
	}
	
} catch(serverException $ex) {
	echo $ex->showSpecific();
} catch(DatabaseException $ex){
echo $ex->showSpecific();
 }



?>