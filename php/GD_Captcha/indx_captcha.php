<?php
session_start();
$image_html_code = <<<img
<img src="captcha.php" />
img;
$form_html_code = <<<form
<form action="indx_captcha.php" method="POST" >
<input type="text" name="cap" />
<input type="submit" value="confirm" />
form;
echo "Type the code in the Image:<br />";
echo $image_html_code;
echo "<br /><br />";
echo $form_html_code;
echo "<br />";
if(isset($_POST['cap']) && !empty($_POST['cap'])){
$cap = $_POST['cap'];
$session = $_SESSION['captcha'];
if($cap == $session){
echo "Match..";
}else{
echo "invaild, the code not match..";
$_SESSION['captcha'] = rand(16841,94376);
}
}else if(isset($_POST['cap']) && empty($_POST['cap'])){
echo "please , fill the form..";
}else{
$_SESSION['captcha'] = rand(16841,94376);
}
?>