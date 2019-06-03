<?php
/*
get method very useful method to use for forms
but when to use get , post ?
get good for simple things like page number simple form etc..
but for security and good performance it better to use POST
cuz each server has limit in Getting variables in url
also post very useful for uploading files etc..
and for security
must use htmlentities function
like that htmlentities($_GET['name']);
for ex:-
*/
if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])){
$day = htmlentities($_GET['day']);
$date = htmlentities($_GET['date']);
$year = htmlentities($_GET['year']);
if(!empty($day)&& !empty($date)&& !empty($year))
echo 'Today it is '.$day.' '.$date.' '.$year;
else
echo 'Please Fill all fields..';
}

?>

<form action="GET_METHOD.php" method="GET">
<label for="day">DAY :</label>
<input type="text" name="day" id="day" /> <br /> <br />
<label for="date">DATE :</label>
<input type="text" name="date" id="date" /> <br /> <br />
<label for="year">YEAR :</label>
<input type="text" name="year" id="year" /><br /> <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="submit" value="submit" />
</form>