<?php
/*
Object oriented programming have:-
1- Classes
2- Properties
3- Methods
*/

//declare a class named BankAccount.
class BankAccount{
//declare Properties
//variable can be public , protected or private.
 public $balance = 15.6;
 
 //declare a method
  public function DisplayBalance(){
  	//write the variable name without the dollar sign.
  	//this mean inside this class in general.
  echo 'balance: '.$this->balance;
  }

}

//to create a new object of a class in php.
$obj = new BankAccount();
//to call a method inside a class in php.
//always remember whenever calling a method using object
//you have to use hivan(->) instead of dot(.)
$obj->DisplayBalance();

?>