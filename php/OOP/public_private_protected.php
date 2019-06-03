<?php

class BankAccount{
//properties
//private means it can not be access outside the class itslef.
//private $balance = 3500;

//protected means only extends classes can access this property.
//protected $balance = 3500; 
   
//standard of delcaring private variable classes.
//private $_balance = 3500;

//for protected use $_T before the variable name
//it is stantard of declaring a variable classes.
 var $_Tbalance = 3500; 

//methods
 public function DisplayBalance(){
 	return $this->$_Tbalance;
 }

}


$obj = new BankAccount();
//it will display a fatal error 'cause it is private same for protected.
echo $obj->_Tbalance;

?>