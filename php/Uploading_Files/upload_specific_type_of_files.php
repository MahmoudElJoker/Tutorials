<?php

/*
very important to make specific type of files to to upload for security and other things,
might I wanna upload just Images then I will have trouble if someone upload a php file for ex,
or pdf file etc..
just imagine you have gallery then someone uploaded a pdf file!! you will have some issues if you didn't
select a specific type of files to upload
and that done easily by $_FILES['file']['type']; ,
u also might wanna to make a maximum size for files 1 mb for ex..
that done by $_FILES['file']['size'];

**********************
*   Very important   *
**********************
there another types like application/  , text/plain etc..
and it must be handled or can use it in a cloud or anything else..

-----------------------------------
to prevent uploading fake file types...
// return mime type ala mimetype extension
$finfo = finfo_open(FILEINFO_MIME_TYPE);
    $type = finfo_file($finfo, $tmp_name);
finfo_close($finfo);
*/
@$file_name = $_FILES['image']['name'];
@$file_size = $_FILES['image']['size'];
@$file_type = $_FILES['image']['type'];
@$temp_location = $_FILES['image']['tmp_name'];
$new_location = 'Photos/';
$JPG_extension = 'image/jpeg';
$BMP_extension = 'image/bmp';
$PNG_extension = 'image/png';
$GIF_extension = 'image/gif';
if(isset($file_name)){
if(empty($file_name)){
echo 'Please choose an image..';
}else{
if($file_size <= 1000024){
switch($file_type){
case $PNG_extension:
case $BMP_extension:
case $GIF_extension:
case $JPG_extension: 
if(move_uploaded_file($temp_location,$new_location.$file_name)){
echo 'File has been uploaded..';
}else{
echo 'Something went wrong while uploading the file...';
}
break;
default : echo 'Please select image extension (jpg/jpeg,bmp,png or gif)..';
break;
}
}else{
echo 'Maximum size of image 1MB.';
}
      }
    }


?>

<form method="post" action="upload_specific_type_of_files.php" enctype="multipart/form-data" > 
<label for="photo">Select an image : </label><br />
<input type="file" name="image" id="photo" /> <br /><br />
<input type="submit" value="Upload Image" /> 
</form>
