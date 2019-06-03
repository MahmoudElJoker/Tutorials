<!doctype html>
<html>
<head>
<title>ajax example 3</title>
<script type="text/javascript">

function load(){
if(window.XMLHttpRequest){
  xmlhttp = new XMLHttpRequest();
}else{
  xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
}

xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById('ajax-test').innerHTML = xmlhttp.responseText;
}

  }
  
 xmlhttp.open('GET','ajax-example2-inc.php',true);
 xmlhttp.send();
}
</script>

</head>

<body>

<input type="submit" value="Submit" onclick="load();" />

<div id="ajax-test"></div>

</body>
</html>