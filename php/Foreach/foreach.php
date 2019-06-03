<?php
/*
for each in PHP difference than Java and c++
cuz in php we should make something like that
foreach($array_name as $items)
that only for single array
but multi-dimensional array we need to make foreach to the number of dimensional in array
for example 2D array
we need to make something like that :-
foreach($array_name as $Dimensional){
foreach($Dimensional as $items){
echo $items;
}
}
*/
 $multi = array(array(5,6,8,9,10,25),array(12,1,5,9,7)); 
foreach($multi as $c)
 foreach($c as $i)
 echo $i.' ';

?>