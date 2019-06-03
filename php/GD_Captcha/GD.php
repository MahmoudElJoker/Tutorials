<?php
/*
*-----------------------------------------*
| GD library it doesn't come with PHP by  |
| default ,so I have either to install    |
| it or using XAMMP...                    |
*-----------------------------------------*

GD very useful library to generate and modify graphics,
for ex :-
it can be used to generate text to an image, or make a reCPaptcha
to prevent bots to access some data in the app, or may it by useful for 
security as well.

to change a content type of page in php , must use this function :-
header('Content-type: image/jpeg');
and by type image/jpeg it convert the page to jpg image.
it can be converted to pdf or ppt and so on, as well..

*/
header('Content-type: image/jpeg');
//to get the value from a variable or from the user etc..
if(isset($_GET['img'])){
$email = $_GET['img'];
}else{
$email = "No email specified.";
}
$email_len = strlen($email);

$font_size = 5;

//ImageFontHeight() function to set the width of the image and it take
// 1 argument is for a font size multiplying email length plus 2
$img_width = ImageFontWidth($font_size) * $email_len + 2;
//ImageFontHeight() it's almost the same things as ImageFontWidth
//the only different is to add 6
$img_height = ImageFontHeight($font_size) + 6;
//imagecreate() simply to create the image ,and it takes 2 argument
//image width and image height that I specified already..
$img = imagecreate($img_width,$img_height);
 //to set color for the image with RGB values , and 255 255 255 
 //mean white and this function takes 5 arguments 1st arg for imagecreate
 //the other args for the color that I wanna set.
 //background color
 imagecolorallocate($img,255,255,255);
 //to set a color for the font , 0 0 0 mean black in RGB
 $font_color = imagecolorallocate($img,0,0,0);
 //to convert the the previous parameters to string
 //this function takes 6 arguments , 1st arg for imagecreate , 2nd arg for the fontsize
 //3rd and 4th arguments for padding 0 0 mean no padding , 5th argument for the string text
 //the last argument for the font color
 imagestring($img,$font_size, 1 , 1 , $email , $font_color);
 //last select the type of the image , and then the image successfully
 //created, this function take 1 argument and that argument is imagecreate
 imagejpeg($img);
?>