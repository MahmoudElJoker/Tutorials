<?php
/* simple script to test my knowledge in strings in php*/

/* the str_replace way
if((isset($_POST['some_text'])&&isset($_POST['replace'])&&isset($_POST['find'])) 
&&(!empty($_POST['some_text'])&&!empty($_POST['replace'])&&!empty($_POST['find']))){
$find = $_POST['find'];
$some_text = $_POST['some_text'];
$replace_value = $_POST['replace'];
$replace = str_replace($find,$replace_value,$some_text);
}*/

//the substr_replace(); way with strpos(); function

if((isset($_POST['some_text'])&&isset($_POST['replace'])&&isset($_POST['find'])) 

&&(!empty($_POST['some_text'])&&!empty($_POST['replace'])&&!empty($_POST['find'])))
{

$find = $_POST['find'];

$find_length = strlen($find);

$some_text = $_POST['some_text'];

$replace = $_POST['replace'];

$position = 0;

while($str_position = strpos($some_text,$find, $position)){
$some_text = substr_replace($some_text,$replace,$str_position,$find_length);
$position = $str_position + $find_length ;
}
}
else if(isset($_POST['some_text'])||isset($_POST['replace'])||isset($_POST['find'])){

echo 'Please Fill all fields.';

}
function show(){
if((isset($_POST['some_text'])&&isset($_POST['replace'])&&isset($_POST['find'])) 
&&(!empty($_POST['some_text'])&&!empty($_POST['replace'])&&!empty($_POST['find']))){ 
global $some_text;
echo $some_text;}
}

?>

<form action="search_replace.php" method="POST">
<label for="text">Text area :</label>
<br>
<textarea cols="40" rows="6" name="some_text" id="text"><?php show(); ?></textarea>
<br> <br>
<label for="find">Find :</label>
<br>
<input type="text" name="find" id="find" />
<br> <br>
<label for="replace">Replace :</label>
<br>
<input type="text" name="replace" id="replace" />
<br> <br>
<input type="submit" value="Find and Replace" />
</form>