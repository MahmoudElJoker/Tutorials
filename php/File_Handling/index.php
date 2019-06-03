<?php
/*
a very important topic is about file handling 
it's about reading , writing and appending
what is file handling and why is useful?
file handling is very important to deal with files
in reading , writing and appending etc..
also it useful for adding some information to a file with the old data
for ex :-
and to do that we need some function
1- fopen(); function
and we do not use read , write or append letters here inside the fopen function
but we do use ( w ) for writing onto the file and ( r ) for reading the file and ( a ) for appending the file
to open the file and this function have 2 arguments
1 for the file name and the other argument is for the action in file
like read or write or append for ex :-
fopen('mido.txt','w');

2- fwrite(); function
is to write anything inside the file
and this function take 2 arguments first one is a variable name of the file that we deal with
and the other argument for the letters or information that will be stored into the file
for ex :-
fwrite($file_handle,'mido is awesome cuz mido is a programmer');

3- fclose(); function
to close the file after reading or writing or even appeding that file
and fclose() function in php has 1 argument is the variable of the file that we're dealing with
for ex :-
fclose($var);
*/

$file_handle = fopen("mido.txt",'w');

fwrite($file_handle,'mido is awesome cuz mido is a programmer'."\n");

fclose($file_handle);

echo 'file saved..';
?>