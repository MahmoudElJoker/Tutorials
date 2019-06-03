<?php
/*
very important part of file handling listing.
for ex :-
if I wanna make a gallery for a web application
it would be better if I will store the images in folder 
and then listing it..
and that done by 2 functions 
1- opendir() function take 1 parameter 
2- readdir() function also take 1 parameter
*/

$directory = 'My_Images';
$main_dir = 'tut/File_Handling';
$images = opendir($directory.'/');
$host = 'http://'.$_SERVER['HTTP_HOST'];
if($images){
echo 'All Images in '."$directory : ".'<br /><br />';

while($read_img = readdir($images)){
if($read_img != '.' && $read_img != '..')
echo "<img src='$host/$main_dir/$directory/$read_img' width='350' height='350' />"."<br /><br />";
}
}else{
echo 'something went wrong while opening the directory..';
}

?>