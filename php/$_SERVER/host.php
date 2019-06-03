<?php
/*
a very cool keyword in $_SERVER 
it's HTTP_HOST
it's very useful to getting the domain name of ur webstie
why it needed and why should I use it?
there many uses for that keyword for ex :-
if I have image folder or something this keyword can create the domain automatically
then I can just put my Image name or folder name
it typing like that -> $_SERVER['HTTP_HOST'];
*/

$host = 'http://'.$_SERVER['HTTP_HOST'];
$folder = '/tut/Images/';
echo 'Your domain name is : '.$host;

?>
<br /> <br />
<img src="<?php echo $host.$folder.'mido23.jpg'; ?>" width="150" height="150" />