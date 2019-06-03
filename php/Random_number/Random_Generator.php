<?php
/*random generator
to get the maximum of random
must call getrandmax(); function
and we can call random function like this
rand(); without any argement or it can have minimum and maximum arguments like this
rand(25,100); etc..
*/ 
echo 'Random Number : '.rand().'<br />';

//to show up maximum number of random generator
echo 'Maximum random number : '.getrandmax().'<br />';

//to select maximum and minimum random numbers.
echo 'random numbers between 1-6 : '.rand(1,6);
?>