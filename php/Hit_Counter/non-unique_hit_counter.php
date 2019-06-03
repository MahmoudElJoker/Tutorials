<?php
/*
hit counter is very useful to count the page views ,
there 2 ways to make a hit counter in php, 1st way by using file handling (text file),
the other way by using a database..

*/
//first database way..

include_once('count.php');
$counter_query = "SELECT hit_count FROM $tb_name WHERE id = 1";
@$counter = mysql_query($counter_query) or die('something wrong in your counter query..');
while ($row = mysql_fetch_assoc($counter)) {
    echo "(DB WAY) Page Views : ".$row["hit_count"];
}

//second text file why
$file = fopen('hit_counter.txt','r');
$read = fread($file,filesize('hit_counter.txt'));
$read = $read + 1;
fclose($file);
$file = fopen('hit_counter.txt','w');
fwrite($file,$read);
fclose($file);
echo "<br /><br />"."(TXT WAY) Page Views : ".$read;



?>