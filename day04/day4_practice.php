<?php
function sayHello(){
    echo "Hello"." <br>";
}

sayHello();

function greet($name){
    echo $name ." <br>";
}

greet("hasibul");
greet("siam");

function add($a,$b){
    return $a + $b ."<br>";
}

$total=add(20,40);
echo $total;


function welcome($name="geust"){
    echo "welcome $name <br>";
}
welcome();
welcome("rohim");

// task 01 
function greetUser($name){
    return "Welcome Hello $name"."<br>";
}
echo greetUser("Hasibul");
echo greetUser("Hadi");
echo greetUser("osman");
// task 02
// function calculator($a,$b,$cal){
//     if ($cal=="add") {
//         return $a+$b;
//     }
//     elseif($cal=="subtract"){
//         return $a-$b;
//     }
//     elseif($cal=="multiply"){
//         return $a*$b;
//     }
//     elseif($cal=="divide"&&$b!=0){
//         return $a/$b;
//     }
//     else{
//         return "some thing is wrong try agine";
//     }
// }
// $sum=calculator(20,50,"add");
// echo $sum;
// $sub=calculator(30,20,"subtract");
// echo $sub;
// $div=calculator(6,30,"divide");
// echo $div;
function adds($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}
echo adds(34,67);
// task 03
function isEven($number){
if($number%2==0){
    return "even";
}
else{
    return "odd";
}
}
isEven(40);
isEven(45);
// task 04 
function calculateGrade($marks){
    if ($marks>=80) {
        return "A";
    }
    elseif($marks>=60){
        return "B";
    }
    elseif($marks>=40){
        return "c";
    }
    else{
        return " Fail";
    }
}
$Hasibul=40;
$sami=82;
$jisan=65;
$korim=29;
echo calculateGrade($Hasibul); 
echo calculateGrade($sami); 
echo calculateGrade($jisan); 
echo calculateGrade($korim); 

// task 05

function checkLogin($user,$pass){
    $mainuser="Admin";
    $mainpass=1234;
    if($mainpass==$pass && $mainuser==$user){
        return "Login successful";
    }
    else{
        return "Login failed";
    }
    
}
echo checkLogin("Admin",1234);
// task 06 
function fullname($first_name,$last_name){
    return $first_name." ".$last_name;
}
echo fullname("Hasibul","Islam");

// task 07
function calculateDiscount($total){
    if($total>=1000){
        $dis=$total*0.2;
        return $total-$dis;
    }
    elseif($total>=500){
          $dis=$total*0.1;
        return $total-$dis;
    }
    else {
        return "No discount";
     }
}
echo calculateDiscount(1000);
?>