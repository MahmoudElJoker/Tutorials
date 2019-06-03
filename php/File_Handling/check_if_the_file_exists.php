<?php
//a cool method to check the file that we're trying to handle is exist or not
// and that done by file_exists() function
//this function also useful to check if there a file with the same name then u can change the name if so
//an example :-
$file = "m56.txt";
if(file_exists($file)){
echo 'file already exists..';
}else{
$file_handle = fopen($file,'w');
fwrite($file_handle,'I am creating a new file..');
fclose($file_handle);
echo 'file is not exists..'.'<br />'.'data saved.';
}

?>