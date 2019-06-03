<?php
/*
very useful function to send email (mail function) 
it takes 4 arguments 
and it done by mail();
for ex :-
$to = "email@email.com";
$subject = "subject";
$message_content = "here the content that I wanna send in the message...";
$from = "from: email@email.com";
//or to make a name appear with the email address
$from = "from: MiDo <email@email.com>";
mail($to,$subject,$message_content,$from);
and it will be cool if i made a html form to send the email..
*/
$to = "email@email.com";
$subject = "subject";
$message_content = "here the content that I wanna send in the message...";
$from = "from: email@email.com";
//or to make a name appear with the email address
$from = "from: MiDo <email@email.com>";
mail($to,$subject,$message_content,$from);

?>