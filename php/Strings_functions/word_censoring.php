<?php
/*
testing by using real example for replace and ireplace functions
with textarea tag..
let's check it 
*/
$find = array('Mido','so','smart','programmer');
$replace = array('m**o','','s***t','p********r');
if(isset($_POST['word']) && !empty($_POST['word'])){ 
$word = $_POST['word'];
$new_word = str_ireplace($find,$replace,$word);
echo $new_word;
}
?>
<hr />
<form action="word_censoring.php" method="POST" >
<textarea name="word" cols="40" rows="6"><?php if(isset($_POST['word']) && !empty($_POST['word'])){ echo $word;} ?> </textarea>
<br />
<input type="submit" value="submit" />
</form>