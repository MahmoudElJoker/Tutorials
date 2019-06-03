<?php
//how to write something onto a file 
//it so simple to write anything into a file 
// just open the file first by fopen function
//then using fwrite function to write the letters inside the file
// and finally closing the file to make sure everything is well and that done by using fclose function
$file_r = fopen("mido-6.txt","w");
fwrite($file_r,"MiDo is a genius programmer and he'll hack all computer science fields \n Just wait for it and u will see how a good programmer he's..");
fclose($file_r);
echo "the file has been saved..";

?>