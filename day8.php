<?php
    // make array index array ;
    $car=array("xcorla","BMW","Honda");
    print_r($car);
    echo "<br>";
    $bick=["yehama","royale in field","suzuki"];
    $bick[3]="zixer";
    array_push($bick,"appace");
    var_dump($bick);
    // make associative array 
    $me=["name"=>"hasibul","age"=>24,"address"=>"dhaka"];
    print_r($me["age"]);
    print_r($me["name"]);
    $me["id"]="456546";
    print_r($me);
    print_r($me["id"]);

   
/* - **Practice Questions**:
- What is an indexed array? How does it differ from an associative array?
 An indexed array uses numeric indices (e.g., $arr[0]), while an associative array uses named keys (e.g., $arr["key"]).
- How do you add an item to an array?
add data to use  push method or add in use index or key ; 
*/

    // *Exercises
    $color=["red","yellow","blue"];
    print_r($color);
    foreach($color as $value ){
        echo "<br>".$value;
    }
    $my=[
    "name"=>"hasibul",
    "age"=>24,
    "country"=>"bangladesh",
    "muslim"=>true
];
    var_dump($my);
    echo "<br>";
    print_r($my);
    echo "<br>";
    echo $my["age"];
  


?>