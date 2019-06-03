<?php
//another cool function to combine the data inside the file
//and that function called implode
//for ex :-
$file = file("mido2.txt");
$combine_data = implode(',', $file);
echo $combine_data;

?>
