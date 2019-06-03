/*
loops are also the same in JS , like c/c++ , java and php etc..
while(){

}
do{

}while();
for(){

}
*/
//example
var test = 0;
do{
var sum = 0;
var index = 1;
while(index <=100){
sum += index;
index++;
}

alert(sum);


for(var index = 1; index<=10; index++){
document.write(index + "<br />");
}
test++;
}while(test<5);