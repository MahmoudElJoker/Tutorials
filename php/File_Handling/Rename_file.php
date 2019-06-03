<?php
/*
very useful methods to rename files
and that done by rename() function to rename a file..
*/

$file_name = 'm56.txt';
$new_file_name = 'newname.txt';
//to rename files
if(file_exists($file_name)){
rename($file_name,$new_file_name);
echo 'The '."<strong>".$file_name."</strong>".'has been renamed to '."<strong>".$new_file_name."</strong>".'<br /><br />';
}else{
echo "<strong>".$file_name."</strong>".' file is not exists..'.'<br /><br />';
}



?>