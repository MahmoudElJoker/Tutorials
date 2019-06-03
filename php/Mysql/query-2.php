<?php
/*
some queries :-
SELECT * FROM `users` LIMIT 0,20;
SELECT `username`,`password` FROM `users`;
SELECT `username`,`password` FROM `users` WHERE `id` = '1';
SELECT `firstname`, `lastname` FROM `users` WHERE `username` = 'mido' AND `password` = 'midodev';
UPDATE `users` SET `firstname` = 'MiDo' WHERE `id` = '1';
DELETE FROM `users` WHERE `id` = '1';
INSERT INTO `users` VALUE('','mido','passmido ,'Mohamed','Mah');

//if I wanna make the auto_increament back to the default
//I have to change it by make the value of the auto_icreament = 1

INSERT INTO `users` VALUES('','name','password','firstname','lastname');

//sort data

SELECT `firstname` , `lastname` FROM `users` ORDER BY `id` DESC;
SELECT `firstname` , `lastname` FROM `users` ORDER BY `id` ASC;
SELECT `firstname` , `lastname` FROM `users` ORDER BY `id`,`firstname` DESC;
SELECT `firstname` , `lastname` FROM `users` ORDER BY `id` DESC LIMIT 2;



*/

?> 