<?php
// task 01
$frutis=["apple","orange","banana","mango","waterMalan"];
foreach($frutis as $fruti){
    echo $fruti ."<br>";
}
// task 02 
$users=[
    "name"=>"hasibul",
    "age"=>23,
    "email"=>"hasi@gmail.com",
    "country"=>"Bangladesh"
];
// foreach($users as $user){
//     echo $user ."<br>";
// }
foreach ($users as $key => $value) {
    echo $key .":". $value ."<br>";
}
// task 03 
for($i=1;$i<=20;$i++){
    if ($i%2==0) {
       echo $i."<br>";
    }
}
// task 04
$sum=0;
$numbers=[10, 20, 30, 40, 50];
foreach($numbers as $number){
    $sum+=$number;
}
echo $sum;

// task 05
$students = [
  "Hasibul" => 85,
  "Rahim" => 72,
  "Karim" => 58,
  "Sumi" => 90
];
foreach($students as $key => $value){
    if ($value>=80) {
        echo  "name:$key marks :$value Excellent .<br>"; 
    }
    elseif($value>=60){
        echo  "name:$key marks :$value Good .<br>"; 
    }
    else{
        echo  "name:$key marks :$value Needs Improvement .<br>"; 
    }
    
}
// task 06
$products = [
  ["name" => "Laptop", "price" => 55000],
  ["name" => "Mouse", "price" => 500],
  ["name" => "Keyboard", "price" => 1200],
  ["name" => "ram", "price" => 1200]
];
// task 07 
$i = 5;
while ($i >=1) {
    echo $i;
    $i--;
}

// task 8 
$highestProduct = $products[0];

foreach ($products as $product) {
    if ($product["price"] > $highestProduct["price"]) {
        $highestProduct = $product;
    }
}

echo "Highest Price Product: " . $highestProduct["name"] . 
     " (" . $highestProduct["price"] . ")";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show prodact</title>
</head>
<body>
    <h1>product</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>price</th>
        </tr>
    
    <?php foreach($products as $product):?>
        <tr>
        <th><?php echo $product["name"] ?></th>
        <td><?php echo $product["price"]."<br>"?></td>
    </tr>
    <?php endforeach ?>

    </table>
</body>
</html>