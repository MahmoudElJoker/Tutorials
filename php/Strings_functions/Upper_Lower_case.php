
<form action="Upper_Lower_case.php">Name :</label> <input name="name" id="name" type="text" placeholder="Enter your name" />
<input type="submit" name="submit" value="Check" />
</form>
<?php
/*
Upper and Lower Case Conversion

for Lower case :
strtolower();

for Upper case:
strtoupper();
*/
/*
$str = 'Mido So smart Cuz he will hack the Programming';
echo strtolower($str).'<br />';
echo strtoupper($str);
*/

/*
isset() function very useful to check if user set value or not
also empty function check if there value or ur variable is empty
and here we use it to not get error before put the information.
*/

if(isset($_GET['name']) && !empty($_GET['name'])){
$name = $_GET['name'];
$lower = strtolower($name);
echo $lower;
}

?>