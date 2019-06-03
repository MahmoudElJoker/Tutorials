<?php
/*
arrays in php difference than arrays in c/c++ and java
and there another difference in Associative Arrays
and to create an array in php 
like this $arr = array(10);
*/
/* some examples about arrays */
$arr = array(4);
$arr[0] = 25;
$arr[1] = 2;
$arr[2] = 10;
$arr[3] = 15;
$arr2 =  array(1,25,22,33,59,14,23);

echo $arr2[1].'<br />';
/* to display all element in array */
for($i=0; $i<4; $i++)
echo $arr[$i].' ';
echo '<br />';
for($i=0; $i<7; $i++)
echo $arr2[$i].' ';

echo '<br />';
/* another example for string array */
$arr_str = array(5);
$arr_str[0] = 'Mido';
$arr_str[1] = 'Smart';
$arr_str[2] = 'PHP';
$arr_str[3] = 'Java';
$arr_str[4] = 'Developer';
/* -------- */
$arr_str2 = array('I\'m','so','smart','I am','a','programmer');

echo $arr_str[4];
echo '<br />';
echo $arr_str2[2];
echo '<br />';
/* to display all strings element in array */
for($i=0; $i<5; $i++)
echo $arr_str[$i].' ';

echo '<br /><br />';

for($i=0; $i<6; $i++)
echo $arr_str2[$i].' ';
echo '<br /><br />';
/* 
Associative Arrays
it very useful to make for each element in an array a key
and u can use that key in many things it something like maps in c++
and the key can be integer or float or even string
and print_r function very useful to print all elements in array
for ex:-
 */
 $Associative = array(5=>'mido',9=>'smart',10=>'because',12=>'mido',19=>'a good',20=>'programmer');
 echo $Associative[10];
echo '<br /><br />';
// also can use string to string for ex :- 'mido' => 'smart' or number to number for ex :- 5=>10 etc..
 $Associative_str = array('five'=>5,'six'=>6,'eight'=>8,'ten'=>10);
  echo $Associative_str['five'].' '.$Associative_str['ten'];
  echo '<br /><br />';
 print_r($Associative);
   echo '<br /><br />';

/* multi-dimensional */ 
 $multi = array(array(5,6,8,9,10,25),array(12,1,5,9,7)); 
echo $multi[0][2]; 
 echo '<br /><br />';
/* to print all element in multi-dimensional array */
foreach($multi as $c=>$r)
 foreach($r as $i)
 echo $i.' ';
 
   

?>