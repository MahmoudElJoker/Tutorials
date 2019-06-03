<?php
$file_name = 'counter.php';
$file_open = fopen($file_name,'r');
$file_size = filesize($file_name);
echo fread($file_open,$file_size);
fclose($file_open);
?>