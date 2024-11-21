<?php
echo "condition <br>";
$age=10;
if($age>=18){
    echo "you are ready to vote";
}
elseif($age>=15){
    echo "you are wait some time ";
}
else{
    echo "you are baby so now you are not ready to vote";
}
// Exercises
// Write a script that checks if a number is positive, negative, or zero.
$number=0;
if($number==0){
    echo "this number is zero";
}
elseif(0<$number){
    echo "positive number";
}
else{
    echo "negative number";
}
?>