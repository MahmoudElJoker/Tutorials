<?php

class example{

//define constructor in php
 public function __construct($something){
 	$this->SaySomething($something);
 }


public function SaySomething($something){
	echo $something;
}
 
}

$example = new example('mido');
//$example = new example();
//$example->SaySomething();


?>