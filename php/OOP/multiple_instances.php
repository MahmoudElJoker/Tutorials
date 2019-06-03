<?php

//example
class BankAccount{
 public $balance = 0;
 
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
  
  public function deposit($amount) {
  	$this->balance = $this->balance + $amount;
  }

}

$obj = new BankAccount();
$obj2 = new BankAccount();
$obj->deposit(1000); 
$obj2->deposit(100); 
$obj->Withdraw(250); 
$obj2->Withdraw(50); 
echo $obj->DisplayBalance().'<br />';
echo $obj2->DisplayBalance();

?>