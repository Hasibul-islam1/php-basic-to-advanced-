<?php
$name="Hasibul Islam";
$age ="23";
$profession="Junior Developer (PHP Learner)";
$isMarried=false;
$country="Bangladesh";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
    <h1>My Profile </h1>
    <p><strong>Name:</strong><?php echo $name;?></p>
    <p><strong>Age:</strong><?php echo $age;?></p>
    <p><strong>Profession:</strong><?php echo $profession;?></p>
    <p><strong>Country: <?php echo $country ;?></strong></p>
    <p><strong>Married:
    <?php echo $isMarried ? "Yes":"No" ?>
    </strong></p>
</body>
</html>