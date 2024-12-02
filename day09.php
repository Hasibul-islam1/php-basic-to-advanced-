<?php
// array method 
$roll=[56,78,43,56,89];
array_push($roll,100);
print_r($roll);
echo "<br>";
array_pop($roll);
print_r($roll);
$name=["hasibul","rifat","mehedi"];
echo count($name);
print_r(array_merge($roll,$name));
// Exercises
$fruit=["apple","banana","watermalon"];
array_push($fruit,"orange");
echo count($fruit);
$fruit_color=["red","yellow","green","orange"];
$marge=array_merge($fruit,$fruit_color);
print_r($marge);
?>