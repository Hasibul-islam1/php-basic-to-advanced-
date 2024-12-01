<?php
echo "sum 2 number <br>";
    function sum($num1,$num2){
        $num3=$num1+$num2;
        return $num3;
    }
    echo sum(30,20);
    echo "find even or odd <br>";
    function findNum($num){
        if ($num%2==0) {
          return "even number";
        }
        else{
            return "odd number";
        }
    }
    echo findNum(21);
?>