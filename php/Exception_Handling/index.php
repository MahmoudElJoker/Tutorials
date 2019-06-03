<?php
/*
exception handling is a different way to handle errors in php
*/

//example
$age = 14;

try{
	if($age >= 18){
	echo 'old enough';
	} else {	
    throw new Exception('Not old enough.');
	}
	
}catch(Exception $ex){
	echo 'Error: '.$ex->getMessage();
}

?>