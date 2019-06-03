<?php 
//first all how to read a file in php page...

/*
when come to fread function it's interesting cuz it can read letters by bytes 
and that mean if I have for example :-
a word with 4 character it equal to 4 bytes 
so if I wrote 3 in fread function for ex :- it will only read the first 3 characters of that word
*/
$file = fopen("mido.txt","r");
echo fread($file,150);
fclose($file);

echo "<br />";
$file = fopen("mido.txt","r");
//and here is the test I put only 4 bytes so it will read the first 4 characters and spaces
// cuz the first word have only 4 characters so it will read the whole word and only that first word "mido"
echo fread($file,4);
fclose($file);
echo "<br />";
//there another method by using filesize() function and it will give the size of file automatically 
$file_size = filesize("mido.txt");
$file = fopen("mido.txt","r");
echo fread($file,$file_size);
fclose($file);
//there another useful function called explode it can separate every single word in the file or character or anything
//for ex :-
echo "<br />";
$file = fopen("mido.txt","r");
$file = fread($file,$file_size);
$separate_words = explode(' ',$file);
foreach($separate_words as $word){
echo $word.'<br />';
}
//also I can print out word by using array like this :-
echo '<br />'.$separate_words[0];

?>