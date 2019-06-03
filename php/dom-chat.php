<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>text chat</title>
<style type = "text/css">
#some-text{
border: 1px solid #CCCCCC;
height: 170px;
width: 300px;
overflow-y: scroll;
padding: 5px;
}

input#text-chat{
	width : 250px;
}
</style>
<script type="text/javascript">
function load(){
	var data = document.getElementById('text-chat').value;
	if(data != ''){
	document.getElementById('some-text').innerHTML = data;
	data = '';
	}
}
</script>
</head>
<body>

<input type = "text" placeholder = "enter any text.." id = "text-chat" value = '' />
<input type = "submit" value = "Enter" onclick = "load()" />
<div id = "some-text"> </div>

</body>
</html>