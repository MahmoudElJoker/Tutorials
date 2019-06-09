function ChangeText(){
  //get the second element by id
  var paragraph = document.getElementById("par");
  //get the next element sibling
  var sibling = paragraph.nextElementSibling;
  //to get the previous element sibling
  //var sibling = paragraph.previousElementSibling;
  //set the color of the sibling to blue
  sibling.style.color = "red";
}
