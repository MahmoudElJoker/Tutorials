<?php
/*
a way to make a thumbnails of an image..
*/

header('Content-type: image/jpeg');

if(isset($_GET['thumbnail'])){
$original_img = $_GET['thumbnail'];

$original_img_size = getimagesize($original_img);
$original_img_width = $original_img_size[0];
$original_img_height = $original_img_size[1];

$img_size = ($original_img_width + $original_img_height) / 
($original_img_width * ($original_img_height / 45));

$img_width = $original_img_width * $img_size;
$img_height = $original_img_height * $img_size;

$img = imagecreatetruecolor($img_width,$img_height);
$or_img = imagecreatefromjpeg($original_img);

//this function take a copy of an image and resize it.
//and this function takes 10 parameters.
imagecopyresized($img , $or_img, 0 , 0 , 0 , 0 , $img_width , $img_height, 
$original_img_width , $original_img_height);

imagejpeg($img);

}


?>