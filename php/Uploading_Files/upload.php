<?php
/*
one of the most important topics in web development and php
uploading files
it very useful for upload profile photo for ex.. or upload documents etc..
and it done the same as TextBox/TextField in html forms
the only difference , will use 2d array for $_POST
for example 
for TextField I was using something similar to this -> $_POST['User_Name']; $_POST['Password'];
in files will use 2d array like that -> $_FILES['File']['name']; $_FILES['File']['type']; $_FILES['File']['size'];  etc..
and that to know the name , type and the size of that file to handle that as well as I wanna..
*/
//and there a useful function called move_uploaded_file() this function can move the file 
//from temp location to the location that I wanna move the file in.. 
// this function takes 2 arguments first argument for the file I wanna move , second argument for the new location for that file
// and I can got the temp location by using $_FILES['file']['tmp_name'];

// I use @ just to hide the error message in php server
@$file_name = $_FILES['file']['name'];
@$temp = $_FILES['file']['tmp_name'];
if(isset($file_name)){
if(!empty($file_name)){
$location = 'images/';
if(move_uploaded_file($temp,$location.$file_name)){
echo 'The file has been uploaded..';
}else{
echo 'Something went wrong while uploading..';
}
}else{
echo 'Please Select a file...';
}
}



?>
<!-- an example for uploading files -->
<!-- 
very important when make an upload file form 
should wirte
enctype="multipart/form-data"
or will have some issues..
-->
<form method="post" action="upload.php" enctype="multipart/form-data">
<label for="files"> Select a file : </label> <br />
<input type="file" name="file" id="files" /> <br /> <br />
<input type="submit" value="Upload"  />
</form>