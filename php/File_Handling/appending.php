<?php
//first thing I think in file handling
// is about appending files -> and that's mean change the file without remove the old data
//just add a new letters or symbols into the file , it can done by fwrite function as well as writing into a file
// but when we have to open the file we do not wrote 'W' but we do wrote 'a' instead...
$file_append = fopen("mido-6.txt",'a');
fwrite($file_append,"\n"."just test it to see if I can add new things to the file \n without remove the old data!!");
fclose($file_append);
echo "the file has been appended..";

?>