<?php

class BankAccount{
 public $balance = 15.6;
 
  public function DisplayBalance(){
  return 'balance: '.$this->balance;
  }

  public function Withdraw($amount){
  	if($this->balance < $amount){
     echo 'not enough money. ';
  	} else{

   $this->balance  =  $this->balance - $amount;
  }
  }

}

$obj = new BankAccount();
$obj->Withdraw(16); 
echo $obj->DisplayBalance();

?>