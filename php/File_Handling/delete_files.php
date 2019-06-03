<?php
/*
very useful methods to delete files
and that done by unlink() function to delete files
*/

$file_name = 'm56.txt';
$new_file_name = 'newname.txt';
if(file_exists($file_name)){
unlink($file_name);
echo 'file has been deleted.'.'<br /><br />';
}else{
echo 'file is not exists..'.'<br /><br />';
}





?>