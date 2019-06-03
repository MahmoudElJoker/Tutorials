<?php
/*
for appending any file
need to use fopen function with a
like that fopen('mido.txt','a'); and a is an abbreviation of appending
so let test it...
*/
$file_handle = fopen('mido.txt','a');

fwrite($file_handle,"\n".'MiDo is smart cuz MiDo can solve a complex problems..');

fclose($file_handle);

echo 'The file has been appending..';


?>