<?php
//there another method to read element from the file
// and this done by file() function
$read_file = file("mido.txt");
// I used count function here to count the lines in file
$count_line = count($read_file);
$count = 1;
foreach($read_file as $letters){
//I used trim function here to remove white spaces
echo trim($letters);
if($count < $count_line){
echo ',';
}
$count++;
}

?>