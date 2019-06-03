<?php
/*
ReCaptcha very useful to detect if the visitor was bot or human ,
and it for security purpose.
*/
session_start();
//first change the content type of the page to jpg
header('Content-type: image/jpeg');

$text = $_SESSION['captcha'];

$font_size = 30;

$width_img = 190;

$height_img = 65;

$img = imagecreate($width_img,$height_img);

//background color
imagecolorallocate($img,255,255,255);

$font_color = imagecolorallocate($img,0,0,0);
$line_color = imagecolorallocate($img,68,11,25);
$x = 19;

$y = 45;

//this for loop to create 30 line
for($index=1; $index<=65; $index++){
$top = rand(1,190);
$bottom = rand(1,190);
$left = rand(1,190);
$right = rand(1,190);
//cool function to create lines in the image
//it takes 6 parameters.. 
imageline($img,$top,$bottom,$left,$right,$line_color);
}
 //very important function to change the font type in the image
 imagettftext($img,$font_size,0,$x,$y,$font_color,'segoepr.ttf',$text);
 
 imagejpeg($img);


?>