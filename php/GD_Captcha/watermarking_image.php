<?php
/*
watermarking an image can be very useful if I wanna put my web site name on an image ,
or to watermark an image a user uploaded , it can very useful to watermark a video too as well
but in different way
*/
header('Content-type: image/jpeg');

if(isset($_GET['watermark'])){
$watermark = $_GET['watermark'];

//a function to load an image
$watermark_img = imagecreatefromgif('Logo.gif');
//imagesx() function takes 1 argument and it the image that already loaded
//imagex() function to take the width of an image
$watermark_width = imagesx($watermark_img);
//imagey() function to take the height of an image
$watermark_height = imagesy($watermark_img);

//this function to create a watermarking image
$img = imagecreatetruecolor($watermark_width,$watermark_height);
//then load the image that I wanna put the logo on
$img = imagecreatefromjpeg($watermark);

//getimagesize function , very useful function to get the size of an image
//and here I wanna get the image that I wanna put the logo on
//to select the position that I wanna put the logo on this photo later
$image_size = getimagesize($watermark);

//x and y variable just put the logo in an image in a specific position.. 
$x = $image_size[0] - $watermark_width - 10 ;
$y = $image_size[1] - $watermark_height - 10;

//this function very useful to merge 2 images
//this function takes 9 arguments 1st argument for the image that I wanna put the logo on,
//2nd argument is the logo, 3rd and 4th arguments for the position of the logo on the image,
//5th and 6th arguments for padding, 7th and 8th arguments for the logo width and height,
//the last argument is for the fading of the logo..
imagecopymerge($img,$watermark_img,$x,$y,0,0,$watermark_width,$watermark_height,35);
//last thing here the type of the image after the merging..
//and here I did select jpg type..
//and this function takes 2 argument at least 1 argument, 1st argument
//for the image was merged , 2nd argument the name of the image
//::::::::warring::::::::::
//using 2 arguments only when there a need to save the image otherwise 
//just use the first argument
imagejpeg($img);
}

?>