<?php
define('host','localhost');
define('user','root');
define('password','');
define('database','ajax');


class serverException extends Exception{}

class DatabaseException extends Exception{}

try{
	$mysql_connect = @mysqli_connect(host,user,password);
	if(!$mysql_connect){
	throw new serverException('Could not connect to server.');	
	} else if(!@mysqli_select_db($mysql_connect,database)){
	throw new DatabaseException('Could not select database.');
	} else {
		echo 'connected.';
	}
	
} catch(serverException $ex) {
	echo 'Error: '.$ex->getMessage();
} catch(DatabaseException $ex){
	echo 'Error: '.$ex->getMessage();
}



?>