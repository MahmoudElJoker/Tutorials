<?php
$html_open = <<<html_open
<!DOCTYPE html>
<html>
<head><title>test</title></head>
<body>
html_open;

$html_form_gst = <<<form
<form action="test_mutiple_inputs.php" method="post" >
<input type="number" name="nm_guest" />
<input type="submit" value ="submit" name="gnumber_submit"/>
</form>
form;

$html_close = <<<html_close
</body>
</html>
html_close;

$guest_in_name = "guest";

echo $html_open;
echo "\n";
echo $html_form_gst;
@$guest_number = $_POST['nm_guest'];
echo "\n<br />\n";
if(isset($guest_number) && !empty($guest_number)){
for($index =0; $index<$guest_number; $index++){
echo "<input type='text' name='".$guest_in_name.$index."' /> <br /><br />"."\n";
}
}

echo $html_close;
?>