<!DOCTYPE html>
<html>
<head>
<title>Auto Suggestion</title>
<script type="text/javascript">
function findMatch(){
 if(window.XMLHttpRequest){
	 xmlhttp = new XMLHttpRequest();
 } else{
	 xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
 }
 
 xmlhttp.onreadystatechange = function(){
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('suggest').innerHTML = xmlhttp.responseText; 
	 }
 }
 xmlhttp.open('GET','search.inc.php?keyword='+document.search.keyword.value,true);
 xmlhttp.send();
	
}
</script>
</head>
<body>

<form id="search" name="search">
<label for="keyword">type a name:</label> <br />
<input type="text" placeholder="search" name="keyword" onkeyup="findMatch();"/>
</form>

<div id="suggest"></div>

</body>
</html>