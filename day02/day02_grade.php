<?php
$marks=50;
if ($marks>100 || $marks<0) {
    echo "your grade is wrong ";
}
elseif($marks>=80){
    echo "your grade is A+";
}
elseif($marks>=70){
    echo "your grade is A";
}
elseif($marks>=60){
    echo "your grade is A-";
}
elseif($marks>=50){
    echo "your grade is B";
}
elseif($marks>=40){
    echo "your grade is C";
}
elseif($marks>=33){
    echo "your grade is D";
}
else{
    echo "your are fail";
}

?>
