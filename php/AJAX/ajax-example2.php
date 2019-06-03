<?php

if(isset($_GET['show'])){
include $_GET['show'];
}

?>

<input type= "submit" value="Submit" onclick="window.location='ajax-example2.php?show=ajax-example2-inc.php'" />