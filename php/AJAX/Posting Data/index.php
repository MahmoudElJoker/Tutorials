<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function posting(){
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new AtiveXObject('Microsoft.XMLHTTP');
	}
	
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
		document.getElementById('message').innerHTML = xmlhttp.responseText;	
		}
		
		
	}
	
	parameters = 'post='+document.getElementById('post').value;
	
	xmlhttp.open('POST','update.inc.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);
	
}
</script>
</head>
<body>
<label for="post">Post:</label>
<input type="text" name="post" id="post" />
<input type="button" value="submit" onclick="posting();"/>
<div id="message"></div>
</body>
</html>