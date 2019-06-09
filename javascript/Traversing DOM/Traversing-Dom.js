function ChangeText(){
 //1st get the parent
 var parent = document.getElementById('mido');
 //set the child
 //var child = parent.childNodes[3]; // node list
 //to get first element
 //var child = parent.firstElementChild;
 var child = parent.lastElementChild;
 //change the color
 child.style.color = "blue";
}
