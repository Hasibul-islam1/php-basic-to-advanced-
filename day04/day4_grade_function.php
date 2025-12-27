<?php
function GradeMark($marks){
    if ($marks>100 || $marks<0) {
    return "your grade is wrong ";
}
elseif($marks>=80){
    return "your grade is A+";
}
elseif($marks>=70){
    return "your grade is A";
}
elseif($marks>=60){
    return "your grade is A-";
}
elseif($marks>=50){
    return "your grade is B";
}
elseif($marks>=40){
    return "your grade is C";
}
elseif($marks>=33){
    return "your grade is D";
}
else{
    return "your are fail";
}

}
// $hasibul=GradeMark(50);
// echo $hasibul;
$students = [
    "Hasibul" => 85,
    "Rahim" => 72,
    "Karim" => 38,
    "siam"=>50,
    "asif"=> 70,
];
foreach($students as $name => $mark){
    echo "Name is $name Mark is $mark ".GradeMark($mark)."<br>";
}
?>