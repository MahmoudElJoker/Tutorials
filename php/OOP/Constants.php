<?php
/*
constant is not actually a variable it's a value that's assigned
almost like the same way as a variable but will always remain
the same. So you will not be able to change the value of this
constant.
*/

//example 
class Circle{
 const  pi = 3.14;

 public function Area($radius){
 	//use self double colon instead of (this->) when dealing with
 	//constant variables.
  return self::pi * ($radius*$radius);
 }

}

$circle = new Circle();
//use double colon to access variable dirctly from a class
echo $circle::pi;

 echo '<br /> '.$circle->Area(100);

?>