<?php
$fruits=["apple","banana","watermalan"];
$user=[
    "name"=>"Hasibul Islam",
    "id"=>23145,
    "sex"=>"male"
];

echo $user["id"];
print_r($fruits);
print_r($user);
foreach($fruits as $fruit){
    echo $fruit ."<br>";
}

array_push($fruits,"mango");
print_r($fruits);

$students=["Hasibul","Rohim","korim","joshim","Hadi"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$student list</title>
</head>
<body>
    <h1>Student</h1>
    <ul>
    <?php foreach($students as $student): ?>
        <li><?php echo $student; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>