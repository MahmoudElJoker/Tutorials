<?php
class BankAccount{
 public $balance = 0;
 public $type = '';

  public function SetType($input){
   $this->type = $input;
  }

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
//to inherit BankAccount class we use extends.
//so you will be able to inherit all BankAccount
//methods and properties.
class SavingAccount extends BankAccount{
  public $type = '18-25';


}

$obj = new BankAccount();
$obj->SetType('18-25 current.');
$obj->deposit(522);
$obj->Withdraw(100);

//it will display an error 'cause it's a member data of //SavingAccount class so it will only work with SavingAccount
//object 'cause BankAccount did not extends SavingAccount class. 
//echo $obj->type;



$obj_saving = new SavingAccount();
$obj_saving->SetType('Super Saver');
//it will work this time cuz it's a member data of SavingAccount.
echo $obj_saving->type.'<br />';

$obj_saving->deposit(1566);
echo $obj->DisplayBalance().'<br />';
echo $obj_saving->DisplayBalance().'<br />';
echo $obj->type.' has '.$obj->DisplayBalance().'<br />';
echo $obj_saving->type.' has '.$obj_saving->DisplayBalance();

?>