/*
arrays in JS difference of c based language
cuz it created without size like that
var arr = [];
if I wanna add values directly , I have to make something similar to this
var names = ["mido","is","a","genius","programmer"];
*/
var arr = [];
for(var i=0; i<5; i++){
arr[i] = i;
}
for(var x=0; x<5; x++){
document.write(arr[x] + "<br />");
}
function name(){
var names = ["mido","is","a","genius","programmer"];

for(var count=0; count<5; count++){
document.write(names[count]+" ");
}

}