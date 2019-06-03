<?php
/*
timestamps function very useful for tracking time 
something like if I have create a thread or article or something in my website and I want to know
when that article or thread was published ?
for ex :-
1 hour ago.
1 minute ago.
2 weeks ago.
or
Friday 15 July 2017
etc..
something like Google in search results 
it also can be useful to show all threads by time.
and that done by time function
*/

$time = time();
$actual_time = date('D d M  Y - H:i:s',$time);

echo 'The current time/date is '.$actual_time;
echo '<br /><br />';
/* for set date like week ago or something 
strtotime(); very useful function it takes a string data
for time for ex :- strtotime('+ 1 week');
it can be 'week' 'year' 'month' 'hour' 'minute' 'second' etc..
and it can be combination like strtotime(-1 week 2 hour 30 second);
*/
$time_now = date('D d M  Y - H:i:s',$time);
$time_modified = date('D d M  Y - H:i:s',strtotime('-1 week 2 hour 30 second'));
echo 'Time modified '.$time_modified ;

?>