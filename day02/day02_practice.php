<?php
// task 01
$marks=40;
if($marks>=40){
    echo "pass";
}
else{
    echo "fail";
}

// task 02 
$age=19 ;
if ($age<13) {
    echo "Age is $age Category: Child";
}
elseif($age>=13 && $age<20){
    echo "Age is $age Category: Teenager";

}
elseif($age>=20 && $age<60){
 echo "Age is $age Category: Adult";
}
else{
    echo "Age is $age Category:Senior " ;
    
}

// task 03 
$total=100;
$isMember=false;

if($total>=1000 && $isMember==true){
    echo "You get a 20% discount.";
}
elseif($total>=1000 && $isMember==false){
    echo "You get a 10% discount.";
}
else{
    echo "No discount.";
}
// task 04 
$age = 19;
$hasID = true;
$hasPassport = false;
if ($age>=18 &&($hasID == true || $hasPassport==true)) {
    echo "You can enter.";
}
else {
    echo "Entry denied.";
}

// task 05 

$temp=36;
if ($temp<10) {
    echo "Temperature: $temp °C → Message:Too Cold";
}
elseif($temp>=10 && $temp<=25){
    echo "Temperature: $temp °C → Message: nice weather";
}
elseif($temp>=26 && $temp <= 35){
    echo "Temperature: $temp °C → Message: hot weather";
}
else{
    echo "Temperature: $temp °C → Message: too hot";
}

// task 06 
$correctUser = "admin";
$correctPass = "1234";
$inputUser = "admin";
$inputPass = "1234";
if ($correctUser== $inputUser&& $correctPass ==$inputPass) {
    echo "Login successful";
}
else{
    echo "Login failed";
}
//  task 07 
//  i am comfident i do it 
?>